<?php
declare(strict_types=1);

namespace FrankVanHest\PhpStanRulesNoMagic\Tests\NoMagicCallRule\TestFiles;

final class NoMagicCallRuleTestPolymorphismFile extends AbstractNoMagicCallRuleTestPolymorphismFile
{
    public function foo(): string
    {
        return 'foo';
    }
}

abstract class AbstractNoMagicCallRuleTestPolymorphismFile
{
    /**
     * @param array<mixed> $arguments
     */
    public function __call(string $name, array $arguments): void
    {
    }
}
