<?php

declare(strict_types=1);

namespace Termyn\Timekeeper;

use DateTimeImmutable;
use DateTimeZone;

final class SystemTimeService implements TimeService
{
    private readonly string $systemTimeZoneName;

    public function __construct()
    {
        $this->systemTimeZoneName = sprintf('%s', ini_get('date.timezone'));
    }

    public function measure(): DateTimeImmutable
    {
        $localeDateTime = new DateTimeImmutable(
            sprintf('@%s', time())
        );

        return $localeDateTime->setTimezone(
            new DateTimeZone($this->systemTimeZoneName)
        );
    }
}
