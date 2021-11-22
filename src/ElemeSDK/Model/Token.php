<?php

namespace Devtech\ElemmeSDK\Model;

class Token extends BaseReq
{

    /**
     * @var string 商户id
     */
    public $merchant_id;

    /**
     * @var string accessToken
     */
    public $access_token;

    /**
     * @var string 过期时间
     */
    public $expire_in;

    /**
     * @var string 刷新token
     */
    public $refresh_token;

    /**
     * @var string 刷新token过期时间
     */
    public $re_expire_in;

    /**
     * @return string
     */
    public function getMerchantId()
    {
        return $this->merchant_id;
    }

    /**
     * @param string $merchant_id
     */
    public function setMerchantId($merchant_id)
    {
        $this->merchant_id = $merchant_id;
    }

    /**
     * @return string
     */
    public function getAccessToken()
    {
        return $this->access_token;
    }

    /**
     * @param string $access_token
     */
    public function setAccessToken($access_token)
    {
        $this->access_token = $access_token;
    }

    /**
     * @return string
     */
    public function getExpireIn()
    {
        return $this->expire_in;
    }

    /**
     * @param string $expire_in
     */
    public function setExpireIn($expire_in)
    {
        $this->expire_in = $expire_in;
    }

    /**
     * @return string
     */
    public function getRefreshToken()
    {
        return $this->refresh_token;
    }

    /**
     * @param string $refresh_token
     */
    public function setRefreshToken($refresh_token)
    {
        $this->refresh_token = $refresh_token;
    }

    /**
     * @return string
     */
    public function getReExpireIn()
    {
        return $this->re_expire_in;
    }

    /**
     * @param string $re_expire_in
     */
    public function setReExpireIn($re_expire_in)
    {
        $this->re_expire_in = $re_expire_in;
    }


}