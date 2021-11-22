<?php
/**
 * 公共函数类
 */

namespace Devtech\ElemmeSDK;

class Helper
{
    /**
     * http请求函数
     * @param $url
     * @param null $data
     * @return mixed
     */
    public static function httpRequest($url, $data = null)
    {
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HEADER, false);
        curl_setopt($curl, CURLOPT_TIMEOUT, 30);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-type: Application/json'));
        if (!empty($data)) {
            curl_setopt($curl, CURLOPT_POST, true);
            curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        }
        $output = curl_exec($curl);
        curl_close($curl);
        return $output;
    }

    /**
     * 数组转json函数
     * @param array $arr
     * @param int $option
     * @return null|string|string[]
     */
    public static function jsonEncode($arr = array(), $option = '')
    {
        if ($option == 'JSON_UNESCAPED_UNICODE') {
            if (version_compare(PHP_VERSION, '5.4.0', '>=')) {
                return json_encode($arr, JSON_UNESCAPED_UNICODE);
            } else {
                return Helper::decodeUnicode(json_encode($arr));
            }
        } else if ($option) {
            return json_encode($arr, $option);
        } else {
            return json_encode($arr);
        }
    }

    /**
     * 解码unicode
     * @param $string
     * @return null|string|string[]
     */
    public static function decodeUnicode($string)
    {
        return preg_replace_callback('/\\\\u([0-9a-f]{4})/i', create_function(
            '$matches',
            'return mb_convert_encoding(pack("H*", $matches[1]), "UTF-8", "UCS-2BE");'
        ), $string);
    }

    /**
     * 返回当前的毫秒时间戳
     * @return float
     */
    public static function millisecond()
    {
        list($msec, $sec) = explode(' ', microtime());
        return (float)sprintf('%.0f', (floatval($msec) + floatval($sec)) * 1000);
    }

    /**
     * PHP sha256()
     * @param $data
     * @param false $rawOutput
     * @return false|string
     */
    public static function sha256($data, $rawOutput = false)
    {
        if (!is_scalar($data)) {
            return false;
        }
        $data = (string)$data;
        $rawOutput = !!$rawOutput;
        return hash('sha256', $data, $rawOutput);
    }

    /**
     * 格式化参数格式化成url参数
     * @param $values
     * @return string
     */
    public static function toUrlParams($values)
    {
        $buff = '';
        foreach ($values as $k => $v) {
            if ($k != 'sign' && $v != '' && !is_array($v)) {
                $buff .= $k . '=' . $v . '&';
            }
        }
        return trim($buff, '&');
    }

}