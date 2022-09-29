<?php
declare(strict_types=1);

namespace FrankVanHest\PhpStanRulesNoMagic\Tests\NoMagicDeserializeRule\TestFiles;

final class NoMagicDeserializeRuleTestPolymorphismFile extends AbstractNoMagicDeserializeRuleTestPolymorphismFile
{
    public function foo(): string
    {
        return 'foo';
    }
}

abstract class AbstractNoMagicDeserializeRuleTestPolymorphismFile
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

    /**
     * @return array<mixed>
     */
    public function unserialize(string $classname): array
    {
        return [];
    }
}
