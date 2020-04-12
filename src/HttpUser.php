<?php

namespace Xthk\Ucenter;

use GuzzleHttp\Client;

/**
 * 组装请求头部和数据
 * Class HttpUser
 * @package Xthk\Ucenter
 */
class HttpUser
{
    /**
     * 域名
     * @var string
     */
    private $domain = '';

    /**
     * 请求uri地址
     * @var string
     */
    private $uri = '';

    /**
     * 应用appid
     * @var string
     */
    private $appId = '';

    /**
     * 应用秘钥
     * @var string
     */
    private $appSecret = '';

    /**
     * 系统来源 1 线上， 2 线下
     * @var string
     */
    private $source = '';

    /**
     * 应用端名称
     * @var string
     */
    private $appName = '';

    /**
     * 生成的验签字符串
     * @var string
     */
    private $signature = '';

    public function __construct($config)
    {
        $this->domain    = $config['domain'];
        $this->uri       = $config['uri'];
        $this->appId     = $config['app_id'];
        $this->appSecret = $config['app_secret'];
        $this->source    = $config['source'];
        $this->appName   = $config['app_name'];
    }

    /**
     * 设置签名
     * @param $data
     */
    private function getSign($data)
    {
        $this->signature = Signature::sign($data, $this->appSecret);
    }

    /**
     * 组装头部
     * @return array
     */
    private function generateHeader()
    {
        return [
            'source'         => $this->source,
            'app-name'       => $this->appName,
            'App-Id'         => $this->appId,
            'Signature-Type' => 'plaintext',
            'Signature'      => $this->signature
        ];
    }

    /**
     * 发送curl请求
     * @param $data
     * @param string $method
     * @return string
     */
    public function send($data, $method = 'post')
    {
        try {
            $data['time_random'] = microtime(true); //生成时间戳随机数

            $this->getSign($data);

            $params['headers'] = $this->generateHeader();

            if (strtoupper($method) == 'POST') {
                $params['form_params'] = $data;
            } else {
                $params['query'] = $data;
            }

            $curl = new Client();
            $url  = rtrim($this->domain, '/') . '/' . ltrim($this->uri, '/');

            $response = $curl->request($method, $url, $params);

            return (string)$response->getBody();
        }catch (\Exception $e) {
            echo $e->getMessage();exit;
        }
    }




}