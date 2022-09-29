<?php
declare(strict_types=1);

namespace FrankVanHest\PhpStanRulesNoMagic\Tests\NoMagicToStringRule\TestFiles;

final class NoMagicToStringRuleTestPolymorphismFilePhp8 extends AbstractNoMagicToStringRuleTestPolymorphismFilePhp8
{
    public function foo(): string
    {
        return 'foo';
    }
}

abstract class AbstractNoMagicToStringRuleTestPolymorphismFilePhp8 implements \Stringable
{
    public function __toString(): string
    {
        return 'string';
    }
}
