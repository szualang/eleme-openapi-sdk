<?php
/**
 * 发单api
 */
namespace Devtech\ElemmeSDK\Api;


use Devtech\ElemmeSDK\Config\BaseConfig;
use Devtech\ElemmeSDK\Config\Config;

/**
 * Class AddOrderApi
 * @package DadaOpenApi\Api
 * 新增订单
 */
class OauthApi extends BaseApi {

    public function __construct($debug = true)
    {
        parent::__construct($debug);
    }


    /**
     * 获取token接口
     */
    public function tokenURL()
    {
        $this->setUrl(BaseConfig::TOKEN_URL);
    }

    /**
     * 刷新token接口
     */
    public function refreshTokenUrl()
    {
        $this->setUrl(BaseConfig::REFRESH_TOKEN_URL);
    }
}
