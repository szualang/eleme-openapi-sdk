<?php

namespace Devtech\ElemmeSDK\Model;

class CreateOrderReq extends BaseReq
{
    /**
     * @var string 外部订单号
     */
    public $partner_order_code;

    /**
     * @var string 取货经度
     */
    public $transport_longitude;

    /**
     * @var string 取货纬度
     */
    public $transport_latitude;

    /**
     * @var string 取货点联系人电话
     */
    public $transport_tel;

    /**
     * @var string 外部门店id
     */
    public $out_shop_code;
    /**
     * @var string 门店id
     */
    public $chain_store_id;
    /**
     * @var string 商户订单来源（如 饿了么、美团等）
     */
    public $order_source;
    /**
     * @var string 服务商品id
     */
    public $service_goods_id;
    /**
     * @var string 基础商品id
     */
    public $base_goods_id;
    /**
     * @var int 订单类型（1:即时单，3:预约单）
     */
    public $order_type;
    /**
     * @var string 需要送达时间
     */
    public $require_receive_time;
    /**
     * @var string 下单时间
     */
    public $order_add_time;
    /**
     * @var int 是否使用优惠券
     */
    public $use_coupon;
    /**
     * @var string 预计出餐时间（毫秒)
     */
    public $expect_fetch_time;
    /**
     * @var string 取货点地址描述
     */
    public $transport_address;
    /**
     * @var int 经纬度来源
     */
    public $position_source;
    /**
     * @var string 收货人地址 文字描述
     */
    public $receiver_address;
    /**
     * @var float 收货人经度
     */
    public $receiver_longitude;
    /**
     * @var float 收货人纬度
     */
    public $receiver_latitude;
    /**
     *  @var float 订单商品总金额
     */
    public $goods_total_amount_cent;
    /**
     *  @var float 订单商品客户实际支付金额
     */
    public $goods_actual_amount_cent;
    /**
     * @var float 订单小费
     */
    public $order_tip_amount_cent;
    /**
     * @var float 订单总重量
     */
    public $goods_weight;
    /**
     * @var int 货物件数
     */
    public $goods_count;
    /**
     * @var array OrderItemOpenapiDTO 货物明细
     */
    public $goodsItemList;
    /**
     * @var string 商家订单流水号
     */
    public $serial_number;
    /**
     * @var string 订单来源的 单号
     */
    public $order_source_order_id;
    /**
     * @var string 收货人姓名
     */
    public $receiver_name;
    /**
     * @var string 收货人主要联系方式
     */
    public $receiver_primary_phone;
    /**
     * @var string 收货人备用联系方式
     */
    public $receiver_second_phone;
    /**
     * @var string 分机号
     */
    public $customer_ext_tel;
    /**
     * @var string 用户备注
     */
    public $order_remark;
    /**
     * @var string 预询后下单标识
     */
    public $pre_create_order_t_index_id;
    /**
     * @var string 优惠券id
     */
    public $warehouse_id;
    /**
     * @var string 优惠后配送费总价格(含入参小费金额)入单实际价格取自预下单接口出参同名字段!!!
     */
    public $actual_delivery_amount_cent;
    /**
     * @var string 核销码（贵品服务必填）
     */
    public $write_off_code;
    /**
     * @var string 取消码（贵品服务必填）
     */
    public $cancel_code;
    /**
     * @var string 取餐码
     */
    public $fetch_code;

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

    /**
     * @return string
     */
    public function getSerialNumber()
    {
        return $this->serial_number;
    }

    /**
     * @param string $serial_number
     */
    public function setSerialNumber($serial_number)
    {
        $this->serial_number = $serial_number;
    }

    /**
     * @return string
     */
    public function getOrderSourceOrderId()
    {
        return $this->order_source_order_id;
    }

    /**
     * @param string $order_source_order_id
     */
    public function setOrderSourceOrderId($order_source_order_id)
    {
        $this->order_source_order_id = $order_source_order_id;
    }

    /**
     * @return string
     */
    public function getReceiverName()
    {
        return $this->receiver_name;
    }

    /**
     * @param string $receiver_name
     */
    public function setReceiverName($receiver_name)
    {
        $this->receiver_name = $receiver_name;
    }

    /**
     * @return string
     */
    public function getReceiverPrimaryPhone()
    {
        return $this->receiver_primary_phone;
    }

    /**
     * @param string $receiver_primary_phone
     */
    public function setReceiverPrimaryPhone($receiver_primary_phone)
    {
        $this->receiver_primary_phone = $receiver_primary_phone;
    }

    /**
     * @return string
     */
    public function getReceiverSecondPhone()
    {
        return $this->receiver_second_phone;
    }

    /**
     * @param string $receiver_second_phone
     */
    public function setReceiverSecondPhone($receiver_second_phone)
    {
        $this->receiver_second_phone = $receiver_second_phone;
    }

    /**
     * @return string
     */
    public function getCustomerExtTel()
    {
        return $this->customer_ext_tel;
    }

    /**
     * @param string $customer_ext_tel
     */
    public function setCustomerExtTel($customer_ext_tel)
    {
        $this->customer_ext_tel = $customer_ext_tel;
    }

    /**
     * @return string
     */
    public function getOrderRemark()
    {
        return $this->order_remark;
    }

    /**
     * @param string $order_remark
     */
    public function setOrderRemark($order_remark)
    {
        $this->order_remark = $order_remark;
    }

    /**
     * @return string
     */
    public function getPreCreateOrderTIndexId()
    {
        return $this->pre_create_order_t_index_id;
    }

    /**
     * @param string $pre_create_order_t_index_id
     */
    public function setPreCreateOrderTIndexId($pre_create_order_t_index_id)
    {
        $this->pre_create_order_t_index_id = $pre_create_order_t_index_id;
    }

    /**
     * @return string
     */
    public function getWarehouseId()
    {
        return $this->warehouse_id;
    }

    /**
     * @param string $warehouse_id
     */
    public function setWarehouseId($warehouse_id)
    {
        $this->warehouse_id = $warehouse_id;
    }

    /**
     * @return string
     */
    public function getActualDeliveryAmountCent()
    {
        return $this->actual_delivery_amount_cent;
    }

    /**
     * @param string $actual_delivery_amount_cent
     */
    public function setActualDeliveryAmountCent($actual_delivery_amount_cent)
    {
        $this->actual_delivery_amount_cent = $actual_delivery_amount_cent;
    }

    /**
     * @return string
     */
    public function getWriteOffCode()
    {
        return $this->write_off_code;
    }

    /**
     * @param string $write_off_code
     */
    public function setWriteOffCode($write_off_code)
    {
        $this->write_off_code = $write_off_code;
    }

    /**
     * @return string
     */
    public function getCancelCode()
    {
        return $this->cancel_code;
    }

    /**
     * @param string $cancel_code
     */
    public function setCancelCode($cancel_code)
    {
        $this->cancel_code = $cancel_code;
    }

    /**
     * @return string
     */
    public function getFetchCode()
    {
        return $this->fetch_code;
    }

    /**
     * @param string $fetch_code
     */
    public function setFetchCode($fetch_code)
    {
        $this->fetch_code = $fetch_code;
    }


}