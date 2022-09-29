<?php
declare(strict_types=1);

namespace FrankVanHest\PhpStanRulesNoMagic\Tests\NoMagicGetRule\TestFiles;

final class NoMagicGetRuleTestPolymorphismFile extends AbstractNoMagicGetRuleTestPolymorphismFile
{
    public function foo(): string
    {
        return 'foo';
    }
}

abstract class AbstractNoMagicGetRuleTestPolymorphismFile
{
    public function __get(string $name): int
    {
        return 1;
    }
}
