<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\TextUI\XmlConfiguration;

use IteratorAggregate;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 *
 * @psalm-immutable
 */
final class ExtensionCollection implements IteratorAggregate
{
    /**
     * @psalm-var list<Extension>
     */
    private readonly array $extensions;

    /**
     * @psalm-param list<Extension> $extensions
     */
    public static function fromArray(array $extensions): self
    {
        return new self(...$extensions);
    }

    private function __construct(Extension ...$extensions)
    {
        $this->extensions = $extensions;
    }

    /**
     * @psalm-return list<Extension>
     */
    public function asArray(): array
    {
        return $this->extensions;
    }

    public function getIterator(): ExtensionCollectionIterator
    {
        return new ExtensionCollectionIterator($this);
    }
}
