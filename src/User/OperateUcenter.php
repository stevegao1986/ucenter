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

    public function __construct($config)
    {
        $this->config = $config;
    }

    public function send($uri, $requestMethod = 'post')
    {
        $this->config['uri'] = $uri;
        if (empty($this->params)) {
            throw new \Exception('请求参数不能为空', 400);
        }

        $curl = new HttpUser($this->config);

        return $curl->send($this->params, $requestMethod);
    }

}