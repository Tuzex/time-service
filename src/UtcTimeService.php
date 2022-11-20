<?php

declare(strict_types=1);

namespace Termyn\Timekeeper;

use DateTimeImmutable;
use DateTimeZone;

final class UtcTimeService implements TimeService
{
    public function __construct(
        private readonly TimeService $timeService
    ) {
    }

    public function measure(): DateTimeImmutable
    {
        return $this->timeService->measure()->setTimezone(new DateTimeZone('UTC'));
    }
}
