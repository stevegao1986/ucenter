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

        return $this;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->params['password'] = $password;

        return $this;
    }

    /**
     * @param mixed $passwordConfirmation
     */
    public function setPasswordConfirmation($passwordConfirmation)
    {
        $this->params['password_confirmation'] = $passwordConfirmation;

        return $this;
    }

    /**
     * @param mixed $original_password
     */
    public function setOriginalPassword($original_password)
    {
        $this->params['original_password'] = $original_password;

        return $this;
    }

    /**
     * @param mixed $smsCode
     */
    public function setSmsCode($smsCode)
    {
        $this->params['sms_code'] = $smsCode;

        return $this;
    }

    /**
     * @param mixed $smsType
     */
    public function setSmsType($smsType)
    {
        $this->params['sms_type'] = $smsType;

        return $this;
    }

    /**
     * @param mixed $registerIp
     */
    public function setRegisterIp($registerIp)
    {
        $this->params['register_ip'] = $registerIp;

        return $this;
    }

    /**
     * @param mixed $loginIp
     */
    public function setLoginIp($loginIp)
    {
        $this->params['login_ip'] = $loginIp;

        return $this;
    }

    /**
     * @param mixed $pushId
     */
    public function setPushId($pushId)
    {
        $this->params['push_id'] = $pushId;

        return $this;
    }

    /**
     * @param mixed $pushType
     */
    public function setPushType($pushType)
    {
        $this->params['push_type'] = $pushType;

        return $this;
    }

    /**
     * @param mixed $openId
     */
    public function setOpenId($openId)
    {
        $this->params['open_id'] = $openId;

        return $this;
    }

    /**
     * @param mixed $wechatType
     */
    public function setWechatType($wechatType)
    {
        $this->params['wechat_type'] = $wechatType;

        return $this;
    }

    /**
     * @param mixed $userId
     */
    public function setUserId($userId)
    {
        $this->params['user_id'] = $userId;

        return $this;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status)
    {
        $this->params['status'] = $status;

        return $this;
    }

    /**
     * @param mixed $cityId
     */
    public function setCityId($cityId)
    {
        $this->params['city_id'] = $cityId;

        return $this;
    }

    /**
     * @param mixed $realName
     */
    public function setRealName($realName)
    {
        $this->params['real_name'] = $realName;

        return $this;
    }

    /**
     * @param mixed $gender
     */
    public function setGender($gender)
    {
        $this->params['gender'] = $gender;

        return $this;
    }

    /**
     * @param mixed $birthday
     */
    public function setBirthday($birthday)
    {
        $this->params['birthday'] = $birthday;

        return $this;
    }

    /**
     * @param mixed $emergencyMobile
     */
    public function setEmergencyMobile($emergencyMobile)
    {
        $this->params['emergency_mobile'] = $emergencyMobile;

        return $this;
    }

    /**
     * @param mixed $studentId
     */
    public function setStudentId($studentId)
    {
        $this->params['student_id'] = $studentId;

        return $this;
    }
}