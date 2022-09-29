<?php
declare(strict_types=1);

namespace FrankVanHest\PhpStanRulesNoMagic\Tests\NoMagicSerializeRule\TestFiles;

final class NoMagicSerializeRuleTestClassFileWithSerializableInterface implements \Serializable
{
    /**
     * @return array<mixed>
     */
    public function __serialize(): array
    {
        return [];
    }

    /**
     * @return array<mixed>
     */
    public function __sleep(): array
    {
        return [];
    }

    public function foo(): string
    {
        return 'foo';
    }

    public function serialize(): ?string
    {
        return null;
    }

    public function unserialize($data)
    {
    }
}
