<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Event\Runtime;

use const PHP_OS;
use const PHP_OS_FAMILY;

/**
 * @psalm-immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class OperatingSystem
{
    public function asString(): string
    {
        return PHP_OS;
    }

    public function family(): string
    {
        return PHP_OS_FAMILY;
    }
}
