<?php
namespace Xthk\Ucenter;


/**
 * 公共签名/验签
 * Class Signature
 * @package Xthk\Ucenter
 */
class Signature
{
    public static function sign(array $parameter, $appSecret)
    {

        self::arrayToString($parameter);
        ksort($parameter);
        $sign = md5(json_encode($parameter, true) . $appSecret);
        return $sign;

    }

    protected static function arrayToString(array & $array)
    {

        $array = array_filter($array, function ($item) {
            return !empty($item);
        });

        $array = array_map(function (&$item) {
            if (is_array($item)) {
                return self::arrayToString($item);
            }
            return strval($item);
        }, $array);

        return $array;
    }

    public static function signCheck(array $parameter, $sign, $appSecret)
    {

        return (self::sign($parameter, $appSecret)) == $sign;
    }


}
