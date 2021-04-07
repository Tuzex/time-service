<?php

declare(strict_types=1);

namespace Tuzex\Timekeeper;

use DateTimeImmutable;
use DateTimeZone;

final class SystemTimeService implements TimeService
{
    public function measure(): DateTimeImmutable
    {
        return new DateTimeImmutable('@'.time(), new DateTimeZone('UTC'));
    }
}
