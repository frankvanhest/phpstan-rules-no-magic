<?php
declare(strict_types=1);

namespace FrankVanHest\PhpStanRulesNoMagic\Tests\NoMagicToStringRule\TestFiles;

final class NoMagicToStringRuleTestPolymorphismFile extends AbstractNoMagicToStringRuleTestPolymorphismFile
{
    public function foo(): string
    {
        return 'foo';
    }
}

abstract class AbstractNoMagicToStringRuleTestPolymorphismFile
{
    public function __toString(): string
    {
        return 'string';
    }
}
