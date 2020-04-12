#用户中心文档

```php
require './vendor/autoload.php'; //导入自导加载

use Xthk\Ucenter\User\OperateUcenter;

$config = [
    'domain'     => 'http://127.0.0.1', //请求的域名
    'app_id'     => 1, //应用ID
    'app_secret' => '123456', //应用秘钥
    'source'     => 1, //来源
    'app_name'   => 'web' //应用名称
];

$user = new OperateUcenter($config); 

$user->setMobile('13255552222');

$user->setPassword('123456');

$user->setPasswordConfirmation('123456');

$user->setSmsCode('111111');

$user->setRegisterIp('10.11.12.32');

$user->setUserId(1);

$user->setBirthday('2012-11-11');

$user->setCityId(11011);

$user->setEmergencyMobile('13955558888');

$user->setGender(1);

$user->setOriginalPassword('123456');

$user->setRealName('张三');

$user->setLoginIp('12.12.12.12');

$user->setOpenId('微信openid');

$user->setWechatType('某一个公众号的自定义类型');

$user->setPushId('三方推送与设备绑定的id，比如极光');

$user->setPushType('ios or android');

$user->setStudentId(1);

$user->setStatus(1);

```
##### Xthk\Ucenter\UriConfig中的常量是请求的action
##发送请求事件
```php
$user->send(UriConfig::USER_REGISTER);
```