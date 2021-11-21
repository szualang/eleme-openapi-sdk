<?php
/**
 * 达达接口返回。
 */

namespace Devtech\ElemmeSDK\Protocol;

class BaseBizResponse{

    /**
     * 签名
     */
    private $sign;

    /**
     * 请求响应返回的code
     */
    private $code;

    /**
     * 请求响应返回的信息
     */
    private $msg;

    /**
     * 请求响应返回的结果
     */
    private $business_data;

    /**
     * @return mixed
     */
    public function getSign()
    {
        return $this->sign;
    }

    /**
     * @param mixed $sign
     */
    public function setSign($sign)
    {
        $this->sign = $sign;
    }

    /**
     * @return mixed
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param mixed $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    /**
     * @return mixed
     */
    public function getMsg()
    {
        return $this->msg;
    }

    /**
     * @param mixed $msg
     */
    public function setMsg($msg)
    {
        $this->msg = $msg;
    }

    /**
     * @return mixed
     */
    public function getBusinessData()
    {
        return $this->business_data;
    }

    /**
     * @param mixed $business_data
     */
    public function setBusinessData($business_data)
    {
        $this->business_data = $business_data;
    }


}
