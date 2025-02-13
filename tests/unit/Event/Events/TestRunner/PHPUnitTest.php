<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Event\TestRunner;

use PHPUnit\Event\Runtime\PHPUnit;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;
use PHPUnit\Runner\Version;

#[CoversClass(PHPUnit::class)]
final class PHPUnitTest extends TestCase
{
    public function testDefaults(): void
    {
        $phpUnit = new PHPUnit;

        $this->assertSame(Version::id(), $phpUnit->version());
        $this->assertSame(Version::series(), $phpUnit->series());
    }
}
