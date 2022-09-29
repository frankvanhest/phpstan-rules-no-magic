<?php
declare(strict_types=1);

namespace FrankVanHest\PhpStanRulesNoMagic\Tests\NoMagicDeserializeRule\TestFiles;

final class NoMagicDeserializeRuleTestClassFile
{
    /**
     * @param array<mixed> $data
     */
    public function __unserialize(array $data): void
    {
    }

    public function __wakeup(): void
    {
    }

    public function foo(): string
    {
        return 'foo';
    }

    /**
     * @return array<mixed>
     */
    public function unserialize(string $classname): array
    {
        return [];
    }
}
