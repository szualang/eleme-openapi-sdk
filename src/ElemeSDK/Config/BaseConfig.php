<?php

namespace Devtech\ElemmeSDK\Config;

/**
 * URL配置
 */
class BaseConfig
{
    const SANDBOX_SERVER = 'https://exam-anubis.ele.me/';
    const PRODUCTION_SERVER = 'https://open-anubis.ele.me/';
    const TOKEN_URL = 'token';
    const REFRESH_TOKEN_URL = 'refreshToken';

    public $debug;

    /**
     * @return mixed
     */
    public function getDebug()
    {
        return $this->debug;
    }

    /**
     * @param mixed $debug
     */
    public function setDebug($debug)
    {
        $this->debug = $debug;
    }

    /**
     * @param $debug
     */
    public function __construct($debug)
    {
        $this->debug = $debug;
    }

    /**
     * @return string api主机地址
     */
    public function getServerHost()
    {
        return $this->debug ? self::SANDBOX_SERVER : self::PRODUCTION_SERVER;
    }

    /**
     * @return string OpenApi地址
     */
    public function getOpenApiUrl()
    {
        return $this->getServerHost() . "anubis-webapi/openapi/";
    }

    /**
     * @return string Biz地址
     */
    public function getBizURL()
    {
        return $this->getServerHost() . "anubis-webapi/v3/invoke/";
    }
}