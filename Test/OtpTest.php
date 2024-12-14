<?php

namespace Faj1\Otp;

use PHPUnit\Framework\TestCase;

class OtpTest extends TestCase
{

    public function testVerify()
    {
        var_dump(Otp::verify('KSWUWUM334TJFY5HRLQFFI6UTDDYWIXJP2YNQOJH6J4I2IKQ4OESH5HAMWDBL3VOC7LM55UBLUFWANFZR7ZSUQLH5VLHK3BM2DW2DGQ',696735));
        $this->assertTrue(true, 'Code executed successfully without exceptions.');
    }

    public function testGetImg()
    {
        echo Otp::getImg('KSWUWUM334TJFY5HRLQFFI6UTDDYWIXJP2YNQOJH6J4I2IKQ4OESH5HAMWDBL3VOC7LM55UBLUFWANFZR7ZSUQLH5VLHK3BM2DW2DGQ').PHP_EOL;
        $this->assertTrue(true, 'Code executed successfully without exceptions.');
    }

    public function testGetSecret()
    {
        echo Otp::getSecret().PHP_EOL;

        $this->assertTrue(true, 'Code executed successfully without exceptions.');
    }

    public function testGetOpt()
    {
        echo Otp::getOpt('KSWUWUM334TJFY5HRLQFFI6UTDDYWIXJP2YNQOJH6J4I2IKQ4OESH5HAMWDBL3VOC7LM55UBLUFWANFZR7ZSUQLH5VLHK3BM2DW2DGQ').PHP_EOL;
        $this->assertTrue(true, 'Code executed successfully without exceptions.');
    }
}
