<?php

namespace Faj1\Otp;


use OTPHP\TOTP;


class Otp
{


    /**
     * 生成密钥
     * @return string
     */
    public static function getSecret(): string
    {
        $clock = new MyClock(); // Your own implementation of a PSR-20 Clock
        $otp = TOTP::generate($clock);
        return $otp->getSecret();
    }

    /**
     * 根据密钥获取验证码
     * @param string $Secret
     * @return string
     */
    public static function getOpt(string $Secret): string
    {
        $clock = new MyClock(); // Your own implementation of a PSR-20 Clock
        $otp = TOTP::createFromSecret($Secret, $clock);
        return $otp->now();
    }


    /**
     * 根据密钥返回二维码链接
     * @param string $Secret
     * @param string $app_name
     * @return string
     */
    public static function getImg(string $Secret, string $app_name = "动态验证器"): string
    {
        $clock = new MyClock(); // Your own implementation of a PSR-20 Clock
        $otp = TOTP::createFromSecret($Secret, $clock);
        $otp->setLabel($app_name);
        return $otp->getQrCodeUri(
            'https://api.qrserver.com/v1/create-qr-code/?data=[DATA]&size=300x300&ecc=M',
            '[DATA]'
        );
    }


    /**
     *
     * @param string $secret
     * @param string $code
     * @return bool
     */
    public static function verify(string $secret, string $code): bool
    {
        $clock = new MyClock(); // Your own implementation of a PSR-20 Clock
        $otp = TOTP::createFromSecret($secret,$clock); // create TOTP object from the secret.
        return $otp->verify($code);
    }


}
