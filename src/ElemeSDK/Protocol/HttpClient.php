<?php

namespace Devtech\ElemmeSDK\Protocol;

use Devtech\ElemmeSDK\BaseException;

class HttpClient
{
    const JSON_TYPE = 'json';
    const FORM_TYPE = 'form';

    /**
     * 模拟POST请求
     * @param string $url 请求地址
     * @param mixed $data 请求数据
     * @param string $type 请求类型
     * @param false $useCert 是否引入微信支付证书
     * @param array $sslCert 证书路径
     * @return bool|string
     */
    public function post($url, $data,  $type=self::JSON_TYPE,  $useCert = false, array $sslCert = [])
    {
        $header = [
            'Content-type: application/json;'
        ];

        if ($type == self::FORM_TYPE){
            $header = [
                'Content-Type: application/x-www-form-urlencoded;'
            ];
        }

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $header);
        curl_setopt($curl, CURLOPT_HEADER, false);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_POST, TRUE);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        if ($useCert == true) {
            // 设置证书：cert 与 key 分别属于两个.pem文件
            curl_setopt($curl, CURLOPT_SSLCERTTYPE, 'PEM');
            curl_setopt($curl, CURLOPT_SSLCERT, $sslCert['certPem']);
            curl_setopt($curl, CURLOPT_SSLKEYTYPE, 'PEM');
            curl_setopt($curl, CURLOPT_SSLKEY, $sslCert['keyPem']);
        }
        $result = curl_exec($curl);
        $info = curl_getinfo($curl);
        curl_close($curl);

        if (isset($info['http_code']) && $info['http_code'] == 200) {
            return $result;
        }
        return '';
    }

    /**
     * 模拟GET请求 HTTPS的页面
     * @param string $url 请求地址
     * @param array $data
     * @return string $result
     */
    protected function get($url, array $data = [])
    {
        // 处理query参数
        if (!empty($data)) {
            $url = $url . '?' . http_build_query($data);
        }
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_HEADER, 0);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE); // https请求 不验证证书和hosts
        $result = curl_exec($curl);
        $info = curl_getinfo($curl);
        curl_close($curl);

        if (isset($info['http_code']) && $info['http_code'] == 200) {
            return $result;
        }
        return '';
    }
}