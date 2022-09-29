<?php
declare(strict_types=1);

namespace FrankVanHest\PhpStanRulesNoMagic\Tests\NoMagicDeserializeRule;

use FrankVanHest\PhpStanRulesNoMagic\NoMagicDeserializeRule;
use PHPStan\Rules\Rule;
use PHPStan\Testing\RuleTestCase;

/**
 * @extends RuleTestCase<NoMagicDeserializeRule>
 */
final class NoMagicDeserializeRuleTest extends RuleTestCase
{
    public function testRuleClass(): void
    {
        $this->analyse(
            [__DIR__ . '/TestFiles/NoMagicDeserializeRuleTestClassFile.php'],
            [
                ['Don\'t use magic method __unserialize', 11],
                ['Don\'t use magic method __wakeup', 15]
            ]
        );
    }

    public function testRuleClassWithSerializableInterface(): void
    {
        $this->analyse(
            [__DIR__ . '/TestFiles/NoMagicDeserializeRuleTestClassFileWithSerializableInterface.php'],
            [
                ['Don\'t use interface Serializable', 6],
                ['Don\'t use magic method __unserialize', 19],
                ['Don\'t use magic method __wakeup', 23]
            ]
        );
    }

    public function testRulePolymorphism(): void
    {
        $this->analyse(
            [__DIR__ . '/TestFiles/NoMagicDeserializeRuleTestPolymorphismFile.php'],
            [
                ['Don\'t use magic method __unserialize', 19],
                ['Don\'t use magic method __wakeup', 23]
            ]
        );
    }

    protected function getRule(): Rule
    {
        return new NoMagicDeserializeRule();
    }
}
