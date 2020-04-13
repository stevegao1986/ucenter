<?php

namespace Xthk\Ucenter\User;

use Xthk\Ucenter\HttpUser;

/**
 * 发起请求
 * Class OperateUcenter
 * @package Xthk\Ucenter\User
 */
class OperateUcenter extends BaseParam
{
    protected $config;

    protected $data;

    /**
     * 初始化配置参数
     * OperateUcenter constructor.
     * @param $config
     */
    public function __construct($config)
    {
        $this->config = $config;
    }

    /**
     * 当BaseParam中的set参数不够用时，可以使用此方法给请求参数设置值
     * @param $name     发送到用户中心的请求体参数
     * @param $value    赋值给请求体参数的值
     */
    public function setParams($name, $value)
    {
        if ( !empty( $name ) ) {
            $this->params[$name] = $value;
        }

        return $this;
    }

    /**
     * 获取设置的参数
     * @return mixed
     */
    public function getParmas()
    {
        return $this->params;
    }


    /**
     * 单独设置请求地址uri部分
     * @param $uri
     * @return $this
     */
    public function setRequestUri($uri)
    {
        if ( !empty( $uri ) ) {
            $this->config['uri'] = $uri;
        }

        return $this;
    }

    /**
     * 设置请求的uri和请求方式
     * @param string $uri
     * @param string $requestMethod
     * @return string
     * @throws \Exception
     */
    public function send($uri = '', $requestMethod = 'post')
    {
        if ( !empty( $uri ) ) {
            $this->config['uri'] = $uri;
        }

        if ( empty( $this->params ) ) {
            throw new \Exception( '请求参数不能为空', 400 );
        }

        $curl = new HttpUser( $this->config );

        return $curl->send( $this->params, $requestMethod );
    }

}