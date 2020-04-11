<?php

namespace Xthk\Ucenter\User;

class BaseParam
{
    /**
     * @var 手机号码
     */
    protected $mobile ;

    /**
     * @var 密码
     */
    protected $password;

    /**
     * @var 重复密码
     */
    protected $passwordConfirmation;

    /**
     * @var  旧密码
     */
    protected $original_password;

    /**
     * @var  短信号码
     */
    protected $smsCode;

    /**
     * @var 短信类型
     */
    protected $smsType;

    /**
     * @var 注册IP
     */
    protected $registerIp;

    /**
     * @var 登录IP
     */
    protected $loginIp;

    /**
     * @var 推送ID
     */
    protected $pushId;

    /**
     * @var 推送应用类型
     */
    protected $pushType;

    /**
     * @var 微信openid
     */
    protected $openId;

    /**
     * @var 微信类型
     */
    protected $wechatType;

    /**
     * @var 用户ID
     */
    protected $userId;

    /**
     * @var 用户状态
     */
    protected $status;

    /**
     * @var 城市ID
     */
    protected $cityId;

    /**
     * @var 真实姓名
     */
    protected $realName;

    /**
     * @var 性别
     */
    protected $gender;

    /**
     * @var 生日
     */
    protected $birthday;

    /**
     * @var 紧急联系方式
     */
    protected $emergencyMobile;

    /**
     * @var 学生ID
     */
    protected $studentId;


    /**
     * @return mixed
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @return mixed
     */
    public function getPasswordConfirmation()
    {
        return $this->passwordConfirmation;
    }

    /**
     * @return mixed
     */
    public function getOriginalPassword()
    {
        return $this->original_password;
    }

    /**
     * @return mixed
     */
    public function getSmsCode()
    {
        return $this->smsCode;
    }

    /**
     * @return mixed
     */
    public function getSmsType()
    {
        return $this->smsType;
    }

    /**
     * @return mixed
     */
    public function getRegisterIp()
    {
        return $this->registerIp;
    }

    /**
     * @return mixed
     */
    public function getLoginIp()
    {
        return $this->loginIp;
    }

    /**
     * @return mixed
     */
    public function getPushId()
    {
        return $this->pushId;
    }

    /**
     * @return mixed
     */
    public function getPushType()
    {
        return $this->pushType;
    }

    /**
     * @return mixed
     */
    public function getOpenId()
    {
        return $this->openId;
    }

    /**
     * @return mixed
     */
    public function getWechatType()
    {
        return $this->wechatType;
    }

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @return mixed
     */
    public function getCityId()
    {
        return $this->cityId;
    }

    /**
     * @return mixed
     */
    public function getRealName()
    {
        return $this->realName;
    }

    /**
     * @return mixed
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @return mixed
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * @return mixed
     */
    public function getEmergencyMobile()
    {
        return $this->emergencyMobile;
    }

    /**
     * @return mixed
     */
    public function getStudentId()
    {
        return $this->studentId;
    }

    /**
     * @param mixed $mobile
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @param mixed $passwordConfirmation
     */
    public function setPasswordConfirmation($passwordConfirmation)
    {
        $this->passwordConfirmation = $passwordConfirmation;
    }

    /**
     * @param mixed $original_password
     */
    public function setOriginalPassword($original_password)
    {
        $this->original_password = $original_password;
    }

    /**
     * @param mixed $smsCode
     */
    public function setSmsCode($smsCode)
    {
        $this->smsCode = $smsCode;
    }

    /**
     * @param mixed $smsType
     */
    public function setSmsType($smsType)
    {
        $this->smsType = $smsType;
    }

    /**
     * @param mixed $registerIp
     */
    public function setRegisterIp($registerIp)
    {
        $this->registerIp = $registerIp;
    }

    /**
     * @param mixed $loginIp
     */
    public function setLoginIp($loginIp)
    {
        $this->loginIp = $loginIp;
    }

    /**
     * @param mixed $pushId
     */
    public function setPushId($pushId)
    {
        $this->pushId = $pushId;
    }

    /**
     * @param mixed $pushType
     */
    public function setPushType($pushType)
    {
        $this->pushType = $pushType;
    }

    /**
     * @param mixed $openId
     */
    public function setOpenId($openId)
    {
        $this->openId = $openId;
    }

    /**
     * @param mixed $wechatType
     */
    public function setWechatType($wechatType)
    {
        $this->wechatType = $wechatType;
    }

    /**
     * @param mixed $userId
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @param mixed $cityId
     */
    public function setCityId($cityId)
    {
        $this->cityId = $cityId;
    }

    /**
     * @param mixed $realName
     */
    public function setRealName($realName)
    {
        $this->realName = $realName;
    }

    /**
     * @param mixed $gender
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    /**
     * @param mixed $birthday
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;
    }

    /**
     * @param mixed $emergencyMobile
     */
    public function setEmergencyMobile($emergencyMobile)
    {
        $this->emergencyMobile = $emergencyMobile;
    }

    /**
     * @param mixed $studentId
     */
    public function setStudentId($studentId)
    {
        $this->studentId = $studentId;
    }
}