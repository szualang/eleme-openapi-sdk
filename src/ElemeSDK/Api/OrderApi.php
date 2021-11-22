<?php
/**
 * 发单api
 */
namespace Devtech\ElemmeSDK\Api;

/**
 * Class AddOrderApi
 * @package DadaOpenApi\Api
 * 新增订单
 */
class OrderApi extends BaseApi {
    /**
     * @param $params
     * 预下单接口  https://open.ele.me/documents/openApi/707
     */
    public function preCreateOrder($params)
    {
        $this->setUrl("preCreateOrder");
        $this->setBusinessParams($params);
    }

    /**
     * @param $params
     * 新增订单 新增配送单接口
     */
    public function addOrder($params)
    {
        $this->setUrl("/api/order/addOrder");
        $this->setBusinessParams($params);
    }

    /**
     * @param $params
     * 重新发布订单 在调用新增订单后，订单被取消、过期或者投递异常的情况下，调用此接口，可以在达达平台重新发布订单 接口调用URL地址：/api/order/reAddOrder。
     */
    public function reAddOrder($params)
    {
        $this->setUrl("/api/order/reAddOrder");
        $this->setBusinessParams($params);
    }
    

    /**
     * @param $params
     * 订单预发布
     * 1、查询订单运费接口，接口URL地址：/api/order/queryDeliverFee。
     */
    public function queryDeliverFee($params)
    {
        $this->setUrl('/api/order/queryDeliverFee');
        $this->setBusinessParams($params);
    }

    /**
     * @param $params
     * 订单预发布
     * 2、查询运费后发单接口，接口URL地址：/api/order/addAfterQuery。
     */
    public function addAfterQuery($params)
    {
        $this->setUrl('/api/order/addAfterQuery');
        $this->setBusinessParams($params);
    }

}
