<?php
declare(strict_types=1);

namespace FrankVanHest\PhpStanRulesNoMagic\Tests\NoMagicSetRule\TestFiles;

final class NoMagicSetRuleTestClassFile
{
    public function __set(string $name, string $value): void
    {
    }

    public function foo(): string
    {
        return 'foo';
    }
}
