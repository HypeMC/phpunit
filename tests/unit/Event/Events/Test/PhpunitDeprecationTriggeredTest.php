<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Event\Test;

use const PHP_EOL;
use PHPUnit\Event\AbstractEventTestCase;
use PHPUnit\Framework\Attributes\CoversClass;

#[CoversClass(PhpunitDeprecationTriggered::class)]
final class PhpunitDeprecationTriggeredTest extends AbstractEventTestCase
{
    public function testConstructorSetsValues(): void
    {
        $telemetryInfo = $this->telemetryInfo();
        $test          = $this->testValueObject();
        $message       = 'message';

        $event = new PhpunitDeprecationTriggered(
            $telemetryInfo,
            $test,
            $message
        );

        $this->assertSame($telemetryInfo, $event->telemetryInfo());
        $this->assertSame($test, $event->test());
        $this->assertSame($message, $event->message());
        $this->assertSame('Test Triggered PHPUnit Deprecation (PHPUnit\Event\AbstractEventTestCase::foo)' . PHP_EOL . 'message', $event->asString());
    }
}
