<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/4/10
 * Time: 22:45
 */

require './vendor/autoload.php';

use Xthk\Ucenter\User\OperateUcenter;

$config = [
    'domain'     => 'http://127.0.0.1', //请求的域名
    'app_id'     => 1, //应用ID
    'app_secret' => '123456', //应用秘钥
    'source'     => 1, //来源
    'app_name'   => 'web' //应用名称
];

#链式操作
$user = new OperateUcenter( $config );

$res = $user
    ->setRequestUri( \Xthk\Ucenter\UriConfig::USER_LOGIN_BY_PWD )
    ->setParams( 'mobile', '13308222255' )
    ->setParams( 'password', '123456' )
    ->setParams( 'login_ip', '35.25.25.36' )
    ->setPushId( '111222333' )
    ->setPushType( 1 )
    ->send();

echo $res;
exit;

#方法调用模式
$user = new OperateUcenter( $config );

$user->setMobile( '13255552222' );
$user->setPassword( '123456' );
$user->setPasswordConfirmation( '123456' );
$user->setSmsCode( '111111' );
$user->setRegisterIp( '10.11.12.32' );
$user->setUserId( 1 );
$user->setBirthday( '2012-11-11' );
$user->setCityId( 11011 );
$user->setEmergencyMobile( '13955558888' );
$user->setGender( 1 );
$user->setOriginalPassword( '123456' );
$user->setRealName( '张三' );
$user->setLoginIp( '12.12.12.12' );
$user->setOpenId( '微信openid' );
$user->setWechatType( '某一个公众号的自定义类型' );
$user->setPushId( '三方推送与设备绑定的id，比如极光' );
$user->setPushType( 'ios or android' );
$user->setStudentId( 1 );
$user->setStatus( 1 );

$res = $user->send( 'gets', 'post' );

echo $res;
