<?php
/**
 * base api
 * @author yangchangdong
 * Date: 2019/10/10
 */
namespace Devtech\ElemmeSDK\Api;

class BaseApi{
    
    public $url;
    
    public $businessParams;


    /**
     * BaseApi constructor.
     */
    public function __construct() {

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
