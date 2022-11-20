<?php

declare(strict_types=1);

namespace Termyn\Timekeeper\Test;

use Termyn\Timekeeper\SystemTimeService;
use Termyn\Timekeeper\UtcTimeService;
use PHPUnit\Framework\TestCase;

final class UtcTimeServiceTest extends TestCase
{
    public function testItReturnsDateTimeWithUtcTimeZone(): void
    {
        $timeService = new UtcTimeService(
            new SystemTimeService()
        );

        $dateTime = $timeService->measure();

        $this->assertSame(0, $dateTime->getOffset());
    }
}
