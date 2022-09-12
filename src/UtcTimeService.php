<?php

declare(strict_types=1);

namespace Codea\Timekeeper;

use DateTimeImmutable;
use DateTimeZone;

final class UtcTimeService implements TimeService
{
    public function __construct(
        private TimeService $timeService
    ) {
    }

    public function measure(): DateTimeImmutable
    {
        return $this->timeService->measure()->setTimezone(new DateTimeZone('UTC'));
    }
}
