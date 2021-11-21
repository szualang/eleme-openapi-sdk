<?php

namespace Devtech\ElemmeSDK\Config;


class Config extends BaseUrl
{

    /**
     * 达达开发者app_key
     */
    private $app_key = '';

    /**
     * 达达开发者app_secret
     */
    private $app_secret = '';


    /**
     * @var string 应用id
     */
    private $app_id = '';

    /**
     * @var $debug bool
     */
    private $debug;


    /**
     * 构造函数
     */
    public function __construct($debug, $app_key, $app_secret, $app_id)
    {
        parent::__construct($debug);
        $this->debug = $debug;
        $this->app_key = $app_key;
        $this->app_secret = $app_secret;
        $this->app_id = $app_id;
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
    public function getAppKey()
    {
        return $this->app_key;
    }

    /**
     * @param string $app_key
     */
    public function setAppKey($app_key)
    {
        $this->app_key = $app_key;
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
