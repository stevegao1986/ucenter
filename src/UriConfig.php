<?php

namespace Xthk\Ucenter;

class UriConfig
{
    const USER_API_PREFIX = '/';
    const USERINFO_API_PREFIX = '/';
    const STUDENT_API_PREFIX = '/';

    const USER_REGISTER = self::USER_API_PREFIX . 'register';

    const USER_LOGIN = self::USER_API_PREFIX . 'login';

    const USER_LOGIN_BY_PWD = self::USER_API_PREFIX . 'loginbypwd';

    const USER_LOGIN_BY_MOBILE = self::USER_API_PREFIX . 'loginByMobile';

    const USER_FORGOT_PASSWORD = self::USER_API_PREFIX . 'forgot';

    const USER_GET_USERINFO_BY_MOBILE = self::USER_API_PREFIX . 'getUserInfoByMobile';

    const USER_LOGOUT = self::USER_API_PREFIX . 'logout';

    const USER_REFRESH_TOKEN = self::USER_API_PREFIX . 'refreshToken';

    const USER_SEND_SMS_CODE = self::USER_API_PREFIX . 'sendSmsCode';

    const USER_OPERATE_ACCOUNT = self::USER_API_PREFIX . 'operateAccount';

    const USER_IS_ONLINE = self::USER_API_PREFIX . 'isOnline';




    const CHANGE_BY_PWD = self::USERINFO_API_PREFIX . 'changeByPwd';

    const CHANGE_MOBILE = self::USERINFO_API_PREFIX . 'changeMobile';

    const RESET_PWD = self::USERINFO_API_PREFIX . 'resetPwd';

    const GET_PUSH_ID = self::USERINFO_API_PREFIX . 'getPushId';

    const GENT_OPEN_ID = self::USERINFO_API_PREFIX . 'getOpenId';

    const GET_USER_BY_OPENID = self::USERINFO_API_PREFIX . 'getUserByOpenId';



    const STUDENT_CREATE = self::STUDENT_API_PREFIX . 'create';

    const STUDENT_UPDATE = self::STUDENT_API_PREFIX . 'update';

    const STUDENT_GET = self::STUDENT_API_PREFIX . 'getStudent';

    const STUDENT_DISABLED = self::STUDENT_API_PREFIX . 'disabledStudent';


}