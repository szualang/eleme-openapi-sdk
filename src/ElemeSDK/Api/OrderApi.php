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
    public function createOrder($params)
    {
        $this->setUrl("createOrder");
        $this->setBusinessParams($params);
    }

    /**
     * @param $params
     * 取消订单
     */
    public function cancelOrder($params)
    {
        $this->setUrl("cancelOrder");
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
