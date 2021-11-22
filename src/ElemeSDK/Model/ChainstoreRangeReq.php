<?php

namespace Devtech\ElemmeSDK\Model;

class ChainstoreRangeReq extends BaseReq
{
    /**
     * 
     * @var int 门店id
     */
    public $chain_store_id;
    /**
     * @var string 门店编码
     */
    public $out_shop_code;

    /**
     * @var int 基础商品id
     */
    public $basic_goods_id;

    /**
     * @return int
     */
    public function getChainStoreId()
    {
        return $this->chain_store_id;
    }

    /**
     * @param int $chain_store_id
     */
    public function setChainStoreId($chain_store_id)
    {
        $this->chain_store_id = $chain_store_id;
    }

    /**
     * @return string
     */
    public function getOutShopCode()
    {
        return $this->out_shop_code;
    }

    /**
     * @param string $out_shop_code
     */
    public function setOutShopCode($out_shop_code)
    {
        $this->out_shop_code = $out_shop_code;
    }

    /**
     * @return int
     */
    public function getBasicGoodsId()
    {
        return $this->basic_goods_id;
    }

    /**
     * @param int $basic_goods_id
     */
    public function setBasicGoodsId($basic_goods_id)
    {
        $this->basic_goods_id = $basic_goods_id;
    }


}