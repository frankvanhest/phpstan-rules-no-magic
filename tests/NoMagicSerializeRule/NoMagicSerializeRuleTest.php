<?php
declare(strict_types=1);

namespace FrankVanHest\PhpStanRulesNoMagic\Tests\NoMagicSerializeRule;

use FrankVanHest\PhpStanRulesNoMagic\NoMagicSerializeRule;
use PHPStan\Rules\Rule;
use PHPStan\Testing\RuleTestCase;

/**
 * @extends RuleTestCase<NoMagicSerializeRule>
 */
final class NoMagicSerializeRuleTest extends RuleTestCase
{
    public function testRuleClass(): void
    {
        $this->analyse(
            [__DIR__ . '/TestFiles/NoMagicSerializeRuleTestClassFile.php'],
            [
                ['Don\'t use magic method __serialize', 11],
                ['Don\'t use magic method __sleep', 19]
            ]
        );
    }

    public function testRuleClassForSerializableInterface(): void
    {
        $this->analyse(
            [__DIR__ . '/TestFiles/NoMagicSerializeRuleTestClassFileWithSerializableInterface.php'],
            [
                ['Don\'t use interface Serializable', 6],
                ['Don\'t use magic method __serialize', 11],
                ['Don\'t use magic method __sleep', 19]
            ]
        );
    }

    public function testRulePolymorphism(): void
    {
        $this->analyse(
            [__DIR__ . '/TestFiles/NoMagicSerializeRuleTestPolymorphismFile.php'],
            [
                ['Don\'t use magic method __serialize', 19],
                ['Don\'t use magic method __sleep', 27]
            ]
        );
    }

    protected function getRule(): Rule
    {
        return new NoMagicSerializeRule();
    }
}
