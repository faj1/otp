<?php
declare(strict_types=1);
namespace Faj1\Otp;





use DateTimeImmutable;
use Psr\Clock\ClockInterface;

class MyClock implements ClockInterface
{
    /**
     * 返回当前时间作为 DateTimeImmutable 对象。
     *
     * @return DateTimeImmutable
     */
    public function now(): DateTimeImmutable
    {
        return new DateTimeImmutable('now'); // 获取当前时间
    }
}
