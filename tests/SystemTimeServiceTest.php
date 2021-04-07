<?php

declare(strict_types=1);

namespace Tuzex\Timekeeper\Test;

use PHPUnit\Framework\TestCase;
use Tuzex\Timekeeper;
use Tuzex\Timekeeper\SystemTimeService;

final class SystemTimeServiceTest extends TestCase
{
    public function testItMeasuresTime(): void
    {
        $expected = [
            'timeStamp' => Timekeeper\time(),
            'timeZone' => '+00:00',
        ];

        $timeService = new SystemTimeService();
        $dateTime = $timeService->measure();

        $this->assertSame($expected['timeStamp'], $dateTime->getTimestamp());
        $this->assertSame($expected['timeZone'], $dateTime->getTimezone()->getName());
    }
}
