<?php

declare(strict_types=1);

namespace Codea\Timekeeper\Test;

use Codea\Timekeeper;
use Codea\Timekeeper\FixedTimeService;
use DateTimeImmutable;
use InvalidArgumentException;
use PHPUnit\Framework\TestCase;

final class FixedTimeServiceTest extends TestCase
{
    public function testItMeasuresTime(): void
    {
        $dateTime = new DateTimeImmutable('@' . Timekeeper\time());
        $timeService = new FixedTimeService($dateTime);

        $this->assertSame($dateTime, $timeService->measure());
    }

    public function testItCreatesByTimeStamp(): void
    {
        $timeStamp = Timekeeper\time();
        $timeService = FixedTimeService::fromStamp($timeStamp);

        $this->assertEquals($timeStamp, $timeService->measure()->getTimestamp());
    }

    /**
     * @dataProvider provideTimeStrings
     */
    public function testItCreatesByTimeString(string $value, string $format): void
    {
        $dateTime = DateTimeImmutable::createFromFormat($format, $value);
        $timeService = FixedTimeService::fromString($value, $format);

        $this->assertEquals($dateTime, $timeService->measure());
    }

    public function provideTimeStrings(): array
    {
        return [
            'iso' => ['2021-04-07 12:30:24', 'Y-m-d H:i:s'],
            'local' => ['07.04.2021 12:30:24', 'd.m.Y H:i:s'],
        ];
    }

    public function testItThrowsExceptionIfTimeStringIsInvalid(): void
    {
        $this->expectException(InvalidArgumentException::class);

        FixedTimeService::fromString('07.04.2021', 'Y-m-d H:i:s');
    }
}
