<?php

namespace Devtech\ElemmeSDK\Protocol;

use Devtech\ElemmeSDK\Api\OauthApi;
use Devtech\ElemmeSDK\BaseException;
use Devtech\ElemmeSDK\Config\Config;
use Devtech\ElemmeSDK\Config\ElemeConstant;
use Devtech\ElemmeSDK\Helper;

class OauthClient
{
    /**
     * @var Config
     */
    public $config;

    /**
     * @var $api OauthApi
     */
    public $api;

    /**
     * @param Config $config
     * @param OauthApi $api
     */
    public function __construct(Config $config, OauthApi $api)
    {
        $this->config = $config;
        $this->api = $api;
    }

    /**
     * 签名生成signature
     */
    public function sign($postParam)
    {
        // 先排序
        ksort($postParam);
        $waitSign = Helper::toUrlParams($postParam);
        $sign = Helper::sha256($this->config->getAppSecret() . $waitSign);
        return strtolower($sign);
    }

    /**
     * 授权码模式获取Token
     * {
     * "grant_type": "authorization_code",
     * "code": "u6nNE8O78HxEaNF7OjJzvv",
     * "app_id": "5a09bfcb-3bee-4e56-8486-3af6201ebf12",
     * "merchant_id": "6665",
     * "signature": "c2de762812d1f71ea49471f074c9df80c4ebd15902ba811b3bef1a8d2adb74f6",
     * "timestamp": "1610097357"
     * }
     * @param $auth_code string 授权码
     * @param $merchant_id string 商户id
     * @return mixed
     * @throws BaseException
     */
    public function getTokenByCode($auth_code, $merchant_id)
    {
        $client = new HttpClient();

        $postParam = [];
        $postParam['grant_type'] = 'authorization_code';
        $postParam['code'] = $auth_code;
        $postParam['merchant_id'] = $merchant_id;
        $postParam['app_id'] = $this->config->getAppId();
        $postParam['timestamp'] = Helper::millisecond();
        $postParam['signature'] = $this->sign($postParam);
        $this->api->tokenURL();
        $url = $this->config->getOpenApiUrl() . $this->api->getUrl();
        $response = $client->post($url, json_encode($postParam));
        $result = json_decode(strval($response), true);
        $this->checkError($result);
        return $result;
    }

    /**
     * 刷新token模式获取Token
     * {
     * "grant_type": "refresh_token",
     * "refresh_token": "dbde9396-1175-4ddc-b607-2d03263f267a",
     * "app_id": "5a09bfcb-3bee-4e56-8486-3af6201ebf12",
     * "merchant_id": "6665",
     * "signature": "e6afc4f5e547909f518681a2378d08955f25b305225d74dfc88a00a08892cc58",
     * "timestamp": "1610097357"
     * }
     * @param $merchant_id string 商户id
     * @param $refreshToken string 刷新token
     * @return mixed
     * @throws BaseException
     */
    public function getTokenByRefreshToken($merchant_id, $refreshToken)
    {
        $client = new HttpClient();

        $postParam = [];
        $postParam['grant_type'] = 'authorization_code';
        $postParam['refresh_token'] = $refreshToken;
        $postParam['merchant_id'] = $merchant_id;
        $postParam['app_id'] = $this->config->getAppId();
        $postParam['timestamp'] = Helper::millisecond();
        $postParam['signature'] = $this->sign($postParam);
        $this->api->refreshTokenUrl();
        $url = $this->config->getOpenApiUrl() . $this->api->getUrl();
        $response = $client->post($url, json_encode($postParam));
        $result = json_decode(strval($response), true);
        $this->checkError($result);
        return $result;
    }

    /**
     * 检查返回错误
     * {
     * "sign": "",           //返回值签名，详见开放平台侧返回值签名算法
     * "code": "",           //错误码，详见开放平台侧错误码映射表
     * "msg": "",            //错误信息
     * "business_data": {
     * "app_id": "",        //应用id
     * "merchant_id": "",   //商户id
     * "access_token": "",  //凭证token
     * "refresh_token": "", //刷新token
     * "expire_in": "",     //access_token剩余有效时间,单位：秒，默认有效期是一年
     * "re_expire_in": ""   //refresh_token剩余有效时间
     * }
     * }
     * @param $result BaseBizResponse
     * @throws BaseException
     */
    public function checkError($result)
    {
        if (!$result || $result['code'] != ElemeConstant::SUCCESS_CODE) {
            throw new BaseException($result['message'], $result['code']);
        }
    }
}