<?php
declare(strict_types=1);

namespace FrankVanHest\PhpStanRulesNoMagic\Tests\NoMagicGetRule\TestFiles;

final class NoMagicGetRuleTestClassFile
{
    public function __get(string $name): int
    {
        return 1;
    }

    public function foo(): string
    {
        return 'foo';
    }
}
