<?php

namespace Devtech\ElemmeSDK\Model;

class OrderItemOpenapiDTO
{
    /**
     * @var int 商品编号
     */
    private $item_id;

    /**
     * 商品名称(不超过128个字符)
     */
    private $item_name;

    /**
     * 商品数量
     */
    private $item_quantity;

    /**
     * 商品原价(分)
     */
    private $item_amount_cent;

    /**
     * 商品实际支付金额，必须是乘以数量后的金额，否则影响售后环节的赔付标准
     */
    private $item_actual_amount_cent;

    /**
     * 商品尺寸
     */
    private $item_size;

    /**
     * 商品备注(不超过255个字符)
     */
    private $item_remark;

    /**
     * @return mixed
     */
    public function getItemId()
    {
        return $this->item_id;
    }

    /**
     * @param mixed $item_id
     */
    public function setItemId($item_id)
    {
        $this->item_id = $item_id;
    }

    /**
     * @return mixed
     */
    public function getItemName()
    {
        return $this->item_name;
    }

    /**
     * @param mixed $item_name
     */
    public function setItemName($item_name)
    {
        $this->item_name = $item_name;
    }

    /**
     * @return mixed
     */
    public function getItemQuantity()
    {
        return $this->item_quantity;
    }

    /**
     * @param mixed $item_quantity
     */
    public function setItemQuantity($item_quantity)
    {
        $this->item_quantity = $item_quantity;
    }

    /**
     * @return mixed
     */
    public function getItemAmountCent()
    {
        return $this->item_amount_cent;
    }

    /**
     * @param mixed $item_amount_cent
     */
    public function setItemAmountCent($item_amount_cent)
    {
        $this->item_amount_cent = $item_amount_cent;
    }

    /**
     * @return mixed
     */
    public function getItemActualAmountCent()
    {
        return $this->item_actual_amount_cent;
    }

    /**
     * @param mixed $item_actual_amount_cent
     */
    public function setItemActualAmountCent($item_actual_amount_cent)
    {
        $this->item_actual_amount_cent = $item_actual_amount_cent;
    }

    /**
     * @return mixed
     */
    public function getItemSize()
    {
        return $this->item_size;
    }

    /**
     * @param mixed $item_size
     */
    public function setItemSize($item_size)
    {
        $this->item_size = $item_size;
    }

    /**
     * @return mixed
     */
    public function getItemRemark()
    {
        return $this->item_remark;
    }

    /**
     * @param mixed $item_remark
     */
    public function setItemRemark($item_remark)
    {
        $this->item_remark = $item_remark;
    }


}