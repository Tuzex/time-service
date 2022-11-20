<?php

declare(strict_types=1);

namespace Termyn\Timekeeper\Test;

use PHPUnit\Framework\TestCase;
use Termyn\Timekeeper;
use Termyn\Timekeeper\SystemTimeService;

final class SystemTimeServiceTest extends TestCase
{
    public function testItMeasuresTime(): void
    {
        $timeService = new SystemTimeService();

        $dateTime = $timeService->measure();

        $this->assertSame(Timekeeper\time(), $dateTime->getTimestamp());
    }

    public function testItSetSystemTimeZone(): void
    {
        $timeService = new SystemTimeService();

        $dateTime = $timeService->measure();

        $this->assertSame(
            ini_get('date.timezone'),
            $dateTime->format('e'),
        );
    }
}
