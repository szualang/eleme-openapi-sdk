<?php

namespace Devtech\ElemmeSDK\Config;


use Devtech\ElemmeSDK\Model\Token;
use think\facade\Cache;

class Config extends BaseConfig
{

    /**
     * app_secret
     */
    public $app_secret = '';

    /**
     * @var string 应用id
     */
    public $app_id = '';

    /**
     * @var $debug bool
     */
    public $debug;

    /**
     * @var string 商户id
     */
    public $merchant_id;

    /**
     * api版本
     */
    const VERSION = "1.0";

    /**
     * @var $token Token token类
     */
    public $token = null;

    /**
     * @var string $auth_code 授权码
     */
    public $auth_code = '';

    /**
     * @return string
     */
    public function getAuthCode()
    {
        return $this->auth_code;
    }

    /**
     * @param string $auth_code
     */
    public function setAuthCode($auth_code)
    {
        $this->auth_code = $auth_code;
    }



    /**
     * 构造函数
     * @param $debug bool 是否沙箱环境
     * @param $app_secret
     * @param $app_id
     */
    public function __construct($debug, $app_id, $app_secret)
    {
        parent::__construct($debug);
        $this->debug = $debug;
        $this->app_secret = $app_secret;
        $this->app_id = $app_id;
    }

    /**
     * @return Token
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * @param Token $token
     */
    public function setToken($token)
    {
        $this->token = $token;
    }

    /**
     * @return string
     */
    public function getMerchantId()
    {
        return $this->merchant_id;
    }

    /**
     * @param string $merchant_id
     */
    public function setMerchantId($merchant_id)
    {
        $this->merchant_id = $merchant_id;
    }

    /**
     * @return string
     */
    public function getAppId()
    {
        return $this->app_id;
    }

    /**
     * @param string $app_id
     */
    public function setAppId($app_id)
    {
        $this->app_id = $app_id;
    }

    /**
     * @return bool
     */
    public function getDebug()
    {
        return $this->debug;
    }

    /**
     * @param bool $debug
     */
    public function setDebug($debug)
    {
        $this->debug = $debug;
    }

    /**
     * @return string
     */
    public function getAppSecret()
    {
        return $this->app_secret;
    }

    /**
     * @param string $app_secret
     */
    public function setAppSecret($app_secret)
    {
        $this->app_secret = $app_secret;
    }


}
