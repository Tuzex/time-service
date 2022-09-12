<?php

declare(strict_types=1);

namespace Codea\Timekeeper\Test;

use Codea\Timekeeper;
use Codea\Timekeeper\SystemTimeService;
use PHPUnit\Framework\TestCase;

final class SystemTimeServiceTest extends TestCase
{
    public function testItMeasuresTime(): void
    {
        $timeService = new SystemTimeService();

        $dateTime = $timeService->measure();

        $this->assertSame(Timekeeper\time(), $dateTime->getTimestamp());
    }
}
