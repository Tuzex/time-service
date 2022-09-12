<?php

declare(strict_types=1);

namespace Codea\Timekeeper;

use DateTimeImmutable;

interface TimeService
{
    public function measure(): DateTimeImmutable;
}
