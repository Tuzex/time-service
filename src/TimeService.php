<?php

declare(strict_types=1);

namespace Termyn\Timekeeper;

use DateTimeImmutable;

interface TimeService
{
    public function measure(): DateTimeImmutable;
}
