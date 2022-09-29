<?php
declare(strict_types=1);

namespace FrankVanHest\PhpStanRulesNoMagic\Tests\NoMagicSetRule\TestFiles;

final class NoMagicSetRuleTestPolymorphismFile extends AbstractNoMagicSetRuleTestPolymorphismFile
{
    public function foo(): string
    {
        return 'foo';
    }
}

abstract class AbstractNoMagicSetRuleTestPolymorphismFile
{
    public function __set(string $name, string $value): void
    {
    }
}
