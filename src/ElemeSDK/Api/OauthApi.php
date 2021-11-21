<?php
/**
 * 发单api
 */
namespace Devtech\ElemmeSDK\Api;


use Devtech\ElemmeSDK\Config\BaseUrl;
use Devtech\ElemmeSDK\Config\Config;

/**
 * Class AddOrderApi
 * @package DadaOpenApi\Api
 * 新增订单
 */
class OauthApi extends BaseApi {
    private $baseUrl = null;

    public function __construct($debug = true)
    {
        parent::__construct($debug);
        $this->baseUrl = new BaseUrl($this->isDebug());
    }


    /**
     * @param $params
     * 获取token
     */
    public function tokenByCode($params)
    {
        $this->setUrl($this->baseUrl->getAuthorizeUrl());
        $this->setBusinessParams($params);
    }

    /**
     * @param $params
     * 重新发布订单 在调用新增订单后，订单被取消、过期或者投递异常的情况下，调用此接口，可以在达达平台重新发布订单 接口调用URL地址：/api/order/reAddOrder。
     */
    public function reAddOrder($params)
    {
        $this->setUrl($this->baseUrl->getAuthorizeUrl());
        $this->setBusinessParams($params);
    }

}
