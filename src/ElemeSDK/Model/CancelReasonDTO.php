<?php

namespace Devtech\ElemmeSDK\Model;

class CancelReasonDTO extends BaseModel
{
    /**
     * @var int 取消原因code
     */
    public $orderCancelCode;

    /**
     * @var string 取消原因描述
     */
    public $orderCancelDesc;

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