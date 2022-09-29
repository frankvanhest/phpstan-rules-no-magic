<?php
declare(strict_types=1);

namespace FrankVanHest\PhpStanRulesNoMagic\Tests\NoMagicCallStaticRule\TestFiles;

final class NoMagicCallStaticStaticRuleTestPolymorphismFile extends AbstractNoMagicCallStaticRuleTestPolymorphismFile
{
    public function foo(): string
    {
        return 'foo';
    }
}

abstract class AbstractNoMagicCallStaticRuleTestPolymorphismFile
{
    /**
     * @param array<mixed> $arguments
     */
    public static function __callStatic(string $name, array $arguments): void
    {
    }
}
