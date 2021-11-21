<?php

namespace Devtech\ElemmeSDK\Model;

class CancelReasonDTO
{
    /**
     * @var int 取消原因code
     */
    private $orderCancelCode;

    /**
     * @var string 取消原因描述
     */
    private $orderCancelDesc;

    /**
     * @return int
     */
    public function getOrderCancelCode()
    {
        return $this->orderCancelCode;
    }

    /**
     * @param int $orderCancelCode
     */
    public function setOrderCancelCode($orderCancelCode)
    {
        $this->orderCancelCode = $orderCancelCode;
    }

    /**
     * @return string
     */
    public function getOrderCancelDesc()
    {
        return $this->orderCancelDesc;
    }

    /**
     * @param string $orderCancelDesc
     */
    public function setOrderCancelDesc($orderCancelDesc)
    {
        $this->orderCancelDesc = $orderCancelDesc;
    }


}