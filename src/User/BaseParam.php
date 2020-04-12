<?php

namespace Xthk\Ucenter\User;

/**
 * 基本请求参数
 * Class BaseParam
 * @package Xthk\Ucenter\User
 */
class BaseParam
{

    protected $params; //请求参数

    /**
     * @param mixed $mobile
     */
    public function setMobile($mobile)
    {
        $this->params['mobile'] = $mobile;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->params['password'] = $password;
    }

    /**
     * @param mixed $passwordConfirmation
     */
    public function setPasswordConfirmation($passwordConfirmation)
    {
        $this->params['password_confirmation'] = $passwordConfirmation;
    }

    /**
     * @param mixed $original_password
     */
    public function setOriginalPassword($original_password)
    {
        $this->params['original_password'] = $original_password;
    }

    /**
     * @param mixed $smsCode
     */
    public function setSmsCode($smsCode)
    {
        $this->params['sms_code'] = $smsCode;
    }

    /**
     * @param mixed $smsType
     */
    public function setSmsType($smsType)
    {
        $this->params['sms_type'] = $smsType;
    }

    /**
     * @param mixed $registerIp
     */
    public function setRegisterIp($registerIp)
    {
        $this->params['register_ip'] = $registerIp;
    }

    /**
     * @param mixed $loginIp
     */
    public function setLoginIp($loginIp)
    {
        $this->params['login_ip'] = $loginIp;
    }

    /**
     * @param mixed $pushId
     */
    public function setPushId($pushId)
    {
        $this->params['push_id'] = $pushId;
    }

    /**
     * @param mixed $pushType
     */
    public function setPushType($pushType)
    {
        $this->params['push_type'] = $pushType;
    }

    /**
     * @param mixed $openId
     */
    public function setOpenId($openId)
    {
        $this->params['open_id'] = $openId;
    }

    /**
     * @param mixed $wechatType
     */
    public function setWechatType($wechatType)
    {
        $this->params['wechat_type'] = $wechatType;
    }

    /**
     * @param mixed $userId
     */
    public function setUserId($userId)
    {
        $this->params['user_id'] = $userId;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status)
    {
        $this->params['status'] = $status;
    }

    /**
     * @param mixed $cityId
     */
    public function setCityId($cityId)
    {
        $this->params['city_id'] = $cityId;
    }

    /**
     * @param mixed $realName
     */
    public function setRealName($realName)
    {
        $this->params['real_name'] = $realName;
    }

    /**
     * @param mixed $gender
     */
    public function setGender($gender)
    {
        $this->params['gender'] = $gender;
    }

    /**
     * @param mixed $birthday
     */
    public function setBirthday($birthday)
    {
        $this->params['birthday'] = $birthday;
    }

    /**
     * @param mixed $emergencyMobile
     */
    public function setEmergencyMobile($emergencyMobile)
    {
        $this->params['emergency_mobile'] = $emergencyMobile;
    }

    /**
     * @param mixed $studentId
     */
    public function setStudentId($studentId)
    {
        $this->params['student_id'] = $studentId;
    }
}