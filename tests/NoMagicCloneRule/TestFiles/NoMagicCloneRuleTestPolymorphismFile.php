<?php
declare(strict_types=1);

namespace FrankVanHest\PhpStanRulesNoMagic\Tests\NoMagicCloneRule\TestFiles;

final class NoMagicCloneRuleTestPolymorphismFile extends AbstractNoMagicCloneRuleTestPolymorphismFile
{
    public function foo(): string
    {
        return 'foo';
    }
}

abstract class AbstractNoMagicCloneRuleTestPolymorphismFile
{
    public function __clone()
    {
    }
}
