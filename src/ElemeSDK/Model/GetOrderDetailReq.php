<?php

namespace Devtech\ElemmeSDK\Model;

class GetOrderDetailReq
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


}