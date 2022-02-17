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
        $timeService = new SystemTimeService();

        $dateTime = $timeService->measure();

        $this->assertSame(Timekeeper\time(), $dateTime->getTimestamp());
    }
}
