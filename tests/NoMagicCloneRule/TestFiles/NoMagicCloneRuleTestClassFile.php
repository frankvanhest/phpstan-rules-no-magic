<?php
declare(strict_types=1);

namespace FrankVanHest\PhpStanRulesNoMagic\Tests\NoMagicCloneRule\TestFiles;

final class NoMagicCloneRuleTestClassFile
{
    public function __clone()
    {
    }

    public function foo(): string
    {
        return 'foo';
    }
}
