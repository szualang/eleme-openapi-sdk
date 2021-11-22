<?php
/**
 * 达达接口请求客户端
 */

namespace Devtech\ElemmeSDK\Protocol;

use Devtech\ElemmeSDK\Api\BaseApi;
use Devtech\ElemmeSDK\Config\Config;
use Devtech\ElemmeSDK\Config\ElemeConstant;
use Devtech\ElemmeSDK\Helper;

class BizClient
{

    /**
     * @var int http request timeout;
     */
    public $httpTimeout = 5;

    /**
     * @var Config 配置项
     */
    public $config;

    /**
     * @var BaseApi 接口类
     */
    public $api;

    /**
     * @var null access_token
     */
    public $access_token = null;

    /**
     * @var HttpClient $httpClient  http客户端
     */
    public $httpClient = null;

    /**
     * 构造函数
     */
    public function __construct(Config $config, BaseApi $api)
    {
        $this->config = $config;
        $this->api = $api;
        $this->httpClient = new HttpClient();
    }

    /**
     * 请求调用api
     * @return BaseBizResponse
     */
    public function makeRequest()
    {
        $reqParams = $this->bulidRequestParams();
        $resp = $this->getHttpRequestWithPost(json_encode($reqParams));
//        return $this->parseResponseData($resp);
        return $resp;
    }

    /**
     * 构造请求数据
     * data:业务参数，json字符串
     */
    public function bulidRequestParams()
    {
        $config = $this->getConfig();
        $requestParams = array();
        $requestParams['app_id'] = $config->getAppId();
        $requestParams['timestamp'] = Helper::millisecond();
        $requestParams['business_data'] = $this->api->getBusinessParams();
        $requestParams['access_token'] = $config->getToken()->getAccessToken();
        $requestParams['version'] = $config::VERSION;
        $requestParams['merchant_id'] = $config->getMerchantId();
        $requestParams['signature'] = $this->sign($requestParams);
        return $requestParams;
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
     * 发送请求,POST
     * @param mixed $data 请求的数据
     */
    public function getHttpRequestWithPost($data)
    {
        $config = $this->config;
        $url = $config->getBizURL() . $this->api->getUrl();
        return $this->httpClient->post($url, $data);
    }

    /**
     * 解析响应数据
     * @param string arr返回的数据
     * 响应数据格式：{"status":"success","result":{},"code":0,"msg":"成功"}
     */
    public function parseResponseData($arr)
    {
        $resp = new BaseBizResponse();
        if (empty($arr)) {
            $resp->setMsg(ElemeConstant::FAIL_MSG);
            $resp->setCode(ElemeConstant::FAIL_CODE);

        } else {
            $data = json_decode($arr, true);
            $resp->setMsg($data['msg']);
            $resp->setCode($data['code']);
            $resp->setSign($data['sign']);
            $resp->setBusinessData(isset($data['business_data']) ? $data['business_data'] : null);
        }
        return $resp;
    }

    public function getConfig()
    {
        return $this->config;
    }

    public function getApi()
    {
        return $this->api;
    }
}
