<?php

namespace Xthk\Ucenter\User;

use Xthk\Ucenter\HttpUser;
use Xthk\Ucenter\UriConfig;

class OperateUcenter extends BaseParam
{
    protected $config;

    protected $data;

    public function __construct($config)
    {
        $this->config = $config;
    }

    public function execRegister()
    {
        $this->config['uri'] = UriConfig::USER_REGISTER;
        $this->data          = [
            'mobile'                => $this->getMobile(),
            'password'              => $this->getPassword(),
            'register_id'           => $this->getRegisterIp(),
            'password_confirmation' => $this->getPasswordConfirmation(),
            'sms_code'              => $this->getSmsCode(),
        ];

        return $this->send();
    }

    public function execLoginByPwd()
    {
        $this->config['uri'] = UriConfig::USER_LOGIN_BY_PWD;

        $this->data = [
            'mobile'    => $this->getMobile(),
            'password'  => $this->getPassword(),
            'login_ip'  => $this->getLoginIp(),
            'push_id'   => $this->getPushId(),
            'push_type' => $this->getPushType()
        ];

        return $this->send();
    }

    public function execLoginByMobile()
    {
        $this->config['uri'] = UriConfig::USER_LOGIN_BY_MOBILE;

        $this->data = [
            'mobile'    => $this->getMobile(),
            'password'  => $this->getPassword(),
            'login_ip'  => $this->getLoginIp(),
            'push_id'   => $this->getPushId(),
            'push_type' => $this->getPushType()
        ];

        return $this->send();

    }

    public function execForgotPassword()
    {
        $this->config['uri'] = UriConfig::USER_FORGOT_PASSWORD;

        $this->data = [
            'mobile'   => $this->getMobile(),
            'password' => $this->getPassword(),
            'sms_code' => $this->getSmsCode()
        ];

        return $this->send();

    }

    public function execGetUserInfoByMobile()
    {
        $this->config['uri'] = UriConfig::USER_GET_USERINFO_BY_MOBILE;

        $this->data = [
            'mobile' => $this->getMobile()
        ];

        return $this->send();
    }

    public function execLogout()
    {
        $this->config['uri'] = UriConfig::USER_LOGOUT;
        $this->data          = [
            'user_id' => $this->getUserId()
        ];

        return $this->send();
    }

    public function execRefreshToken()
    {
        $this->config['uri'] = UriConfig::USER_REFRESH_TOKEN;
        $this->data          = [
            'user_id' => $this->getUserId()
        ];

        return $this->send();
    }

    public function execSendSmsCode()
    {
        $this->config['uri'] = UriConfig::USER_SEND_SMS_CODE;
        $this->data          = [
            'mobile'   => $this->getMobile(),
            'sms_type' => $this->getSmsType()
        ];

        return $this->send();
    }

    public function execOperateAccount()
    {
        $this->config['uri'] = UriConfig::USER_OPERATE_ACCOUNT;
        $this->data          = [
            'user_id' => $this->getUserId(),
            'status'  => $this->getStatus()
        ];

        return $this->send();
    }

    public function execIsOnline()
    {
        $this->config['uri'] = UriConfig::USER_IS_ONLINE;
        $this->data          = [
            'user_id' => $this->getUserId(),
        ];
        return $this->send();
    }

    public function execChangePwdByOldPwd()
    {
        $this->config['uri'] = UriConfig::CHANGE_BY_PWD;

        $this->data = [
            'user_id'               => $this->getUserId(),
            'original_password'     => $this->getOriginalPassword(),
            'password'              => $this->getPassword(),
            'password_confirmation' => $this->getPasswordConfirmation(),
        ];

        return $this->send();
    }

    public function execChangeMobile()
    {
        $this->config['uri'] = UriConfig::CHANGE_MOBILE;

        $this->data = [
            'user_id'  => $this->getUserId(),
            'mobile'   => $this->getMobile(),
            'password' => $this->getPassword(),
            'sms_code' => $this->getSmsCode(),
        ];

        return $this->send();
    }

    public function execResetPwd()
    {
        $this->config['uri'] = UriConfig::RESET_PWD;

        $this->data = [
            'user_id' => $this->getUserId()
        ];

        return $this->send();
    }

    public function execFindPushId()
    {
        $this->config['uri'] = UriConfig::GET_PUSH_ID;

        $this->data = [
            'user_id'   => $this->getUserId(),
            'push_type' => $this->getPushType()
        ];

        return $this->send();
    }

    public function execFindOpenId()
    {
        $this->config['uri'] = UriConfig::GENT_OPEN_ID;

        $this->data = [
            'user_id' => $this->getUserId(),
            'type'    => $this->getWechatType()
        ];

        return $this->send();
    }

    public function execFindUserByOpenId()
    {
        $this->config['uri'] = UriConfig::GENT_OPEN_ID;

        $this->data = [
            'open_id' => $this->getOpenId(),
            'type'    => $this->getWechatType()
        ];

        return $this->send();
    }

    public function execCreatStudent()
    {
        $this->config['uri'] = UriConfig::STUDENT_CREATE;

        $this->data = [
            'user_id'          => $this->getUserId(),
            'city_id'          => $this->getCityId(),
            'real_name'        => $this->getRealName(),
            'gender'           => $this->getGender(),
            'birthday'         => $this->getBirthday(),
            'emergency_mobile' => $this->getEmergencyMobile(),
        ];

        return $this->send();
    }

    public function execUpdateStudent()
    {
        $this->config['uri'] = UriConfig::STUDENT_UPDATE;

        $this->data = [
            'user_id'          => $this->getUserId(),
            'student_id'       => $this->getStudentId(),
            'city_id'          => $this->getCityId(),
            'real_name'        => $this->getRealName(),
            'gender'           => $this->getGender(),
            'birthday'         => $this->getBirthday(),
            'emergency_mobile' => $this->getEmergencyMobile(),
        ];

        return $this->send();
    }

    public function execFindStudent()
    {
        $this->config['uri'] = UriConfig::STUDENT_GET;

        $this->data = [
            'user_id'    => $this->getUserId(),
            'student_id' => $this->getStudentId(),
        ];
        return $this->send();
    }

    public function execDisabledStudent()
    {
        $this->config['uri'] = UriConfig::STUDENT_DISABLED;

        $this->data = [
            'user_id'    => $this->getUserId(),
            'student_id' => $this->getStudentId(),
        ];
        return $this->send();
    }

    private function send()
    {
        $curl = new HttpUser($this->config);

        return $curl->send($this->data);
    }

}