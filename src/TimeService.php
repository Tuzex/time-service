<?php

declare(strict_types=1);

namespace Tuzex\Timekeeper;

use DateTimeImmutable;

interface TimeService
{
    public function measure(): DateTimeImmutable;
}
