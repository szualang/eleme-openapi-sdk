<?php
/**
 * 达达接口请求客户端
 */
namespace Devtech\ElemmeSDK\Protocol;

//define("BASE_DIR", dirname(__FILE__) . "/");
//
//require_once BASE_DIR . 'client/dadaResponse.php';
//require_once BASE_DIR . 'config/constant.php';

use Devtech\ElemmeSDK\Api\BaseApi;
use Devtech\ElemmeSDK\Config\Config;
use Devtech\ElemmeSDK\Config\ElemeConstant;

class RequestClient{

    /**
     * @var int http request timeout;
     */
    private $httpTimeout = 5;

    /**
     * @var Config 配置项
     */
    private $config;

    /**
     * @var BaseApi 接口类
     */
    private $api;

    /**
     * @var null access_token
     */
    private $access_token = null;


    /**
     * 构造函数
     */
    public function __construct($config, BaseApi $api){
        $this->config   = $config;
        $this->api      = $api;
        if ($api->getAccessToken()) {
            $this->access_token = $api->getAccessToken();
        }
    }

    /**
     * @return null
     */
    public function getAccessToken()
    {
        // 判断是否传过来accessToken 如若没有，就去接口请求
        return $this->access_token;
    }

    /**
     * @param null $access_token
     */
    public function setAccessToken($access_token)
    {
        $this->access_token = $access_token;
    }

    /**
     * 请求调用api
     * @return BaseBizResponse
     */
    public function makeRequest(){
        $reqParams = $this->bulidRequestParams();
        $resp = $this->getHttpRequestWithPost(json_encode($reqParams));
        return $this->parseResponseData($resp);
    }

    /**
     * 构造请求数据
     * data:业务参数，json字符串
     */
    public function bulidRequestParams(){
        $config = $this->getConfig();
        $api    = $this->getApi();

        $requestParams = array();
        $requestParams['app_key']   = $config->getAppKey();
        $requestParams['body']      = $api->getBusinessParams();
        $requestParams['format']    = $config->getFormat();
        $requestParams['v']         = $config->getV();
        $requestParams['source_id'] = $config->getSourceId();
        $requestParams['timestamp'] = time();
        $requestParams['signature'] = $this->_sign($requestParams);
        return $requestParams;
    }

    /**
     * 签名生成signature
     */
    public function _sign($data){

        $config = $this->getConfig();

        //1.升序排序
        ksort($data);

        //2.字符串拼接
        $args = "";
        foreach ($data as $key => $value) {
            $args.=$key.$value;
        }
        $args = $config->getAppKey() . $args . $config->getAppSecret();
        //3.MD5签名,转为大写
        return strtoupper(md5($args));
    }


    /**
     * 发送请求,POST
     * @param mixed $data 请求的数据
     */
    public function getHttpRequestWithPost($data){

        $config = $this->config;
        $url = $config->getServerHost() . $this->api->getUrl();

        // json
        $headers = array(
            'Content-Type: application/json',
        );
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_HEADER, false);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        curl_setopt($curl, CURLOPT_TIMEOUT, 3);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        $resp = curl_exec($curl);
        //var_dump( curl_error($curl) );//如果在执行curl的过程中出现异常，可以打开此开关查看异常内容。
        $info = curl_getinfo($curl);
        curl_close($curl);

        if (isset($info['http_code']) && $info['http_code'] == 200) {
            return $resp;
        }
        return '';
    }

    /**
     * 解析响应数据
     * @param string arr返回的数据
     * 响应数据格式：{"status":"success","result":{},"code":0,"msg":"成功"}
     */
    public function parseResponseData($arr){
        $resp = new BaseBizResponse();
        if (empty($arr)) {
            $resp->setMsg(ElemeConstant::FAIL_MSG);
            $resp->setCode(ElemeConstant::FAIL_CODE);

        }else{
            $data = json_decode($arr, true);
            $resp->setMsg($data['msg']);
            $resp->setCode($data['code']);
            $resp->setSign($data['sign']);
            $resp->setBusinessData(isset($data['business_data'])?$data['business_data']:null);
        }
        return $resp;
    }

    public function getConfig(){
        return $this->config;
    }

    public function getApi(){
        return $this->api;
    }
}
