<?php
/**
 * base api
 * @author yangchangdong
 * Date: 2019/10/10
 */
namespace Devtech\ElemmeSDK\Api;

class BaseApi{
    
    private $url;
    
    private $businessParams;

    /**
     * @var null access_token
     */
    private $access_token = null;

    /**
     * @var $debug bool 沙箱环境
     */
    private $debug;

    /**
     * @return bool
     */
    public function isDebug()
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
     * @return null
     */
    public function getAccessToken()
    {
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
     * BaseApi constructor.
     * @param $debug
     */
    public function __construct($debug = true) {
        $this->debug = $debug;
    }

    public function getUrl(){
        return $this->url;
    }

    /**
     * @return mixed
     * 获取 businessParams
     */
    public function getBusinessParams(){
        return $this->businessParams;
    }

    /**
     * @param mixed $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    /**
     * @param mixed $businessParams
     */
    public function setBusinessParams($businessParams)
    {
        $this->businessParams = $businessParams;
    }

    

}
