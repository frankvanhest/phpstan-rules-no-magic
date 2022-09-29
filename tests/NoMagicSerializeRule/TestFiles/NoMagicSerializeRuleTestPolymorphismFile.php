<?php
declare(strict_types=1);

namespace FrankVanHest\PhpStanRulesNoMagic\Tests\NoMagicSerializeRule\TestFiles;

final class NoMagicSerializeRuleTestPolymorphismFile extends AbstractNoMagicSerializeRuleTestPolymorphismFile
{
    public function foo(): string
    {
        return 'foo';
    }
}

abstract class AbstractNoMagicSerializeRuleTestPolymorphismFile
{
    /**
     * @return array<mixed>
     */
    public function __serialize(): array
    {
        return [];
    }

    /**
     * @return array<mixed>
     */
    public function __sleep(): array
    {
        return [];
    }

    public function serialize(): void
    {
    }
}
