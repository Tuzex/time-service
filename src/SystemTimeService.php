<?php

declare(strict_types=1);

namespace Tuzex\Timekeeper;

use DateTimeImmutable;

final class SystemTimeService implements TimeService
{
    public function measure(): DateTimeImmutable
    {
        return new DateTimeImmutable('@'.time());
    }
}
