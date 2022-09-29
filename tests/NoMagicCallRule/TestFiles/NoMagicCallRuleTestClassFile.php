<?php
declare(strict_types=1);

namespace FrankVanHest\PhpStanRulesNoMagic\Tests\NoMagicCallRule\TestFiles;

final class NoMagicCallRuleTestClassFile
{
    /**
     * @param array<mixed> $arguments
     */
    public function __call(string $name, array $arguments): void
    {
    }

    public function foo(): string
    {
        return 'foo';
    }
}
