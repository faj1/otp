<?php

namespace Faj1\Otp;


use OTPHP\TOTP;

class Otp
{

    public static function getSecret()
    {
        $clock = new MyClock(); // Your own implementation of a PSR-20 Clock
        $otp = TOTP::generate($clock);
        echo "The OTP secret is: {$otp->getSecret()}\n";

    }

    public static function getOpt()
    {
        $clock = new MyClock(); // Your own implementation of a PSR-20 Clock
    }


    public static function getImg()
    {
        $clock = new MyClock(); // Your own implementation of a PSR-20 Clock
    }


    public static function verify()
    {
        $clock = new MyClock(); // Your own implementation of a PSR-20 Clock
    }


}
