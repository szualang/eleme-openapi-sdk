<?php

namespace Devtech\ElemmeSDK\Model;

class CancelOrderReq
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
     * @var float 单位分取消实际需扣金额，从预取消接口拿 
     */
    private $actual_cancel_cost_cent;
    /** 
     * @var string 取消原因补充 20字以内 
     */
    private $order_cancel_other_reason;
    /** 
     * @var int 1商户取消, 2 用户取消 
     */
    private $order_cancel_role;

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

    /**
     * @return float
     */
    public function getActualCancelCostCent()
    {
        return $this->actual_cancel_cost_cent;
    }

    /**
     * @param float $actual_cancel_cost_cent
     */
    public function setActualCancelCostCent($actual_cancel_cost_cent)
    {
        $this->actual_cancel_cost_cent = $actual_cancel_cost_cent;
    }

    /**
     * @return string
     */
    public function getOrderCancelOtherReason()
    {
        return $this->order_cancel_other_reason;
    }

    /**
     * @param string $order_cancel_other_reason
     */
    public function setOrderCancelOtherReason($order_cancel_other_reason)
    {
        $this->order_cancel_other_reason = $order_cancel_other_reason;
    }

    /**
     * @return int
     */
    public function getOrderCancelRole()
    {
        return $this->order_cancel_role;
    }

    /**
     * @param int $order_cancel_role
     */
    public function setOrderCancelRole($order_cancel_role)
    {
        $this->order_cancel_role = $order_cancel_role;
    }


}