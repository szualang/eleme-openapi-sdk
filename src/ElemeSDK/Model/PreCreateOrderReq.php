<?php

namespace Devtech\ElemmeSDK\Model;

class PreCreateOrderReq
{
    /**
     * @var string 外部订单号
     */
    private $partner_order_code;

    /**
     * @var string 取货经度
     */
    private $transport_longitude;

    /**
     * @var string 取货纬度
     */
    private $transport_latitude;

    /**
     * @var string 取货点联系人电话
     */
    private $transport_tel;

    /**
     * @var string 外部门店id
     */
    private $out_shop_code;
    /**
     * @var string 门店id
     */
    private $chain_store_id;
    /**
     * @var string 商户订单来源（如 饿了么、美团等）
     */
    private $order_source;
    /**
     * @var string 服务商品id
     */
    private $service_goods_id;
    /**
     * @var string 基础商品id
     */
    private $base_goods_id;
    /**
     * @var int 订单类型（1:即时单，3:预约单）
     */
    private $order_type;
    /**
     * @var string 需要送达时间
     */
    private $require_receive_time;
    /**
     * @var string 下单时间
     */
    private $order_add_time;
    /**
     * @var int 是否使用优惠券
     */
    private $use_coupon;
    /**
     * @var string 预计出餐时间（毫秒)
     */
    private $expect_fetch_time;
    /**
     * @var string 取货点地址描述
     */
    private $transport_address;
    /**
     * @var int 经纬度来源
     */
    private $position_source;
    /**
     * @var string 收货人地址 文字描述
     */
    private $receiver_address;
    /**
     * @var float 收货人经度
     */
    private $receiver_longitude;
    /**
     * @var float 收货人纬度
     */
    private $receiver_latitude;
    /**
     *  @var float 订单商品总金额
     */
    private $goods_total_amount_cent;
    /**
     *  @var float 订单商品客户实际支付金额
     */
    private $goods_actual_amount_cent;
    /**
     * @var float 订单小费
     */
    private $order_tip_amount_cent;
    /**
     * @var float 订单总重量
     */
    private $goods_weight;
    /**
     * @var int 货物件数
     */
    private $goods_count;
    /**
     * @var array OrderItemOpenapiDTO 货物明细
     */
    private $goodsItemList;

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
     * @return string
     */
    public function getTransportLongitude()
    {
        return $this->transport_longitude;
    }

    /**
     * @param string $transport_longitude
     */
    public function setTransportLongitude($transport_longitude)
    {
        $this->transport_longitude = $transport_longitude;
    }

    /**
     * @return string
     */
    public function getTransportLatitude()
    {
        return $this->transport_latitude;
    }

    /**
     * @param string $transport_latitude
     */
    public function setTransportLatitude($transport_latitude)
    {
        $this->transport_latitude = $transport_latitude;
    }

    /**
     * @return string
     */
    public function getTransportTel()
    {
        return $this->transport_tel;
    }

    /**
     * @param string $transport_tel
     */
    public function setTransportTel($transport_tel)
    {
        $this->transport_tel = $transport_tel;
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
     * @return string
     */
    public function getChainStoreId()
    {
        return $this->chain_store_id;
    }

    /**
     * @param string $chain_store_id
     */
    public function setChainStoreId($chain_store_id)
    {
        $this->chain_store_id = $chain_store_id;
    }

    /**
     * @return string
     */
    public function getOrderSource()
    {
        return $this->order_source;
    }

    /**
     * @param string $order_source
     */
    public function setOrderSource($order_source)
    {
        $this->order_source = $order_source;
    }

    /**
     * @return string
     */
    public function getServiceGoodsId()
    {
        return $this->service_goods_id;
    }

    /**
     * @param string $service_goods_id
     */
    public function setServiceGoodsId($service_goods_id)
    {
        $this->service_goods_id = $service_goods_id;
    }

    /**
     * @return string
     */
    public function getBaseGoodsId()
    {
        return $this->base_goods_id;
    }

    /**
     * @param string $base_goods_id
     */
    public function setBaseGoodsId($base_goods_id)
    {
        $this->base_goods_id = $base_goods_id;
    }

    /**
     * @return int
     */
    public function getOrderType()
    {
        return $this->order_type;
    }

    /**
     * @param int $order_type
     */
    public function setOrderType($order_type)
    {
        $this->order_type = $order_type;
    }

    /**
     * @return string
     */
    public function getRequireReceiveTime()
    {
        return $this->require_receive_time;
    }

    /**
     * @param string $require_receive_time
     */
    public function setRequireReceiveTime($require_receive_time)
    {
        $this->require_receive_time = $require_receive_time;
    }

    /**
     * @return string
     */
    public function getOrderAddTime()
    {
        return $this->order_add_time;
    }

    /**
     * @param string $order_add_time
     */
    public function setOrderAddTime($order_add_time)
    {
        $this->order_add_time = $order_add_time;
    }

    /**
     * @return int
     */
    public function getUseCoupon()
    {
        return $this->use_coupon;
    }

    /**
     * @param int $use_coupon
     */
    public function setUseCoupon($use_coupon)
    {
        $this->use_coupon = $use_coupon;
    }

    /**
     * @return string
     */
    public function getExpectFetchTime()
    {
        return $this->expect_fetch_time;
    }

    /**
     * @param string $expect_fetch_time
     */
    public function setExpectFetchTime($expect_fetch_time)
    {
        $this->expect_fetch_time = $expect_fetch_time;
    }

    /**
     * @return string
     */
    public function getTransportAddress()
    {
        return $this->transport_address;
    }

    /**
     * @param string $transport_address
     */
    public function setTransportAddress($transport_address)
    {
        $this->transport_address = $transport_address;
    }

    /**
     * @return int
     */
    public function getPositionSource()
    {
        return $this->position_source;
    }

    /**
     * @param int $position_source
     */
    public function setPositionSource($position_source)
    {
        $this->position_source = $position_source;
    }

    /**
     * @return string
     */
    public function getReceiverAddress()
    {
        return $this->receiver_address;
    }

    /**
     * @param string $receiver_address
     */
    public function setReceiverAddress($receiver_address)
    {
        $this->receiver_address = $receiver_address;
    }

    /**
     * @return float
     */
    public function getReceiverLongitude()
    {
        return $this->receiver_longitude;
    }

    /**
     * @param float $receiver_longitude
     */
    public function setReceiverLongitude($receiver_longitude)
    {
        $this->receiver_longitude = $receiver_longitude;
    }

    /**
     * @return float
     */
    public function getReceiverLatitude()
    {
        return $this->receiver_latitude;
    }

    /**
     * @param float $receiver_latitude
     */
    public function setReceiverLatitude($receiver_latitude)
    {
        $this->receiver_latitude = $receiver_latitude;
    }

    /**
     * @return float
     */
    public function getGoodsTotalAmountCent()
    {
        return $this->goods_total_amount_cent;
    }

    /**
     * @param float $goods_total_amount_cent
     */
    public function setGoodsTotalAmountCent($goods_total_amount_cent)
    {
        $this->goods_total_amount_cent = $goods_total_amount_cent;
    }

    /**
     * @return float
     */
    public function getGoodsActualAmountCent()
    {
        return $this->goods_actual_amount_cent;
    }

    /**
     * @param float $goods_actual_amount_cent
     */
    public function setGoodsActualAmountCent($goods_actual_amount_cent)
    {
        $this->goods_actual_amount_cent = $goods_actual_amount_cent;
    }

    /**
     * @return float
     */
    public function getOrderTipAmountCent()
    {
        return $this->order_tip_amount_cent;
    }

    /**
     * @param float $order_tip_amount_cent
     */
    public function setOrderTipAmountCent($order_tip_amount_cent)
    {
        $this->order_tip_amount_cent = $order_tip_amount_cent;
    }

    /**
     * @return float
     */
    public function getGoodsWeight()
    {
        return $this->goods_weight;
    }

    /**
     * @param float $goods_weight
     */
    public function setGoodsWeight($goods_weight)
    {
        $this->goods_weight = $goods_weight;
    }

    /**
     * @return int
     */
    public function getGoodsCount()
    {
        return $this->goods_count;
    }

    /**
     * @param int $goods_count
     */
    public function setGoodsCount($goods_count)
    {
        $this->goods_count = $goods_count;
    }

    /**
     * @return array
     */
    public function getGoodsItemList()
    {
        return $this->goodsItemList;
    }

    /**
     * @param array $goodsItemList
     */
    public function setGoodsItemList($goodsItemList)
    {
        $this->goodsItemList = $goodsItemList;
    }


}