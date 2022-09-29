<?php
declare(strict_types=1);

namespace FrankVanHest\PhpStanRulesNoMagic\Tests\NoMagicToStringRule\TestFiles;

final class NoMagicToStringRuleTestClassFile
{
    public function __toString(): string
    {
        return 'string';
    }

    public function foo(): string
    {
        return 'foo';
    }
}
