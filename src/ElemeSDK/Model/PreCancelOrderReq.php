<?php

namespace Devtech\ElemmeSDK\Model;

class PreCancelOrderReq
{
    /** 
     * @var string 订单号 
     */
    private $order_id;
    /** 
     * @var string 外部订单号 
     */
    private $partner_order_code;
    /** 
     * @var int 从可用取消原因列表接口返回结果选择 
     */
    private $order_cancel_code;

    /**
     * @return string
     */
    public function getOrderId()
    {
        return $this->order_id;
    }

    /**
     * @param string $order_id
     */
    public function setOrderId($order_id)
    {
        $this->order_id = $order_id;
    }

    /**
     * @return string
     */
    public function getPartnerOrderCode()
    {
        return $this->partner_order_code;
    }

    /**
     * @param string $partner_order_code
     */
    public function setPartnerOrderCode($partner_order_code)
    {
        $this->partner_order_code = $partner_order_code;
    }

    /**
     * @return int
     */
    public function getOrderCancelCode()
    {
        return $this->order_cancel_code;
    }

    /**
     * @param int $order_cancel_code
     */
    public function setOrderCancelCode($order_cancel_code)
    {
        $this->order_cancel_code = $order_cancel_code;
    }


}