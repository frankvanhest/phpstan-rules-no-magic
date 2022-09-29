<?php
declare(strict_types=1);

namespace FrankVanHest\PhpStanRulesNoMagic\Tests\NoMagicToStringRule;

use FrankVanHest\PhpStanRulesNoMagic\NoMagicToStringRule;
use PHPStan\Rules\Rule;
use PHPStan\Testing\RuleTestCase;

/**
 * @extends RuleTestCase<NoMagicToStringRule>
 */
final class NoMagicToStringRuleTest extends RuleTestCase
{
    public function testRuleClass(): void
    {
        if (PHP_VERSION_ID >= 80000) {
            $this->analyse(
                [__DIR__ . '/TestFiles/NoMagicToStringRuleTestClassFilePhp8.php'],
                [
                    [sprintf("Don't use interface %s", \Stringable::class), 6]
                ]
            );

            return;
        }

        $this->analyse(
            [__DIR__ . '/TestFiles/NoMagicToStringRuleTestClassFile.php'],
            [
                ['Don\'t use magic method __toString', 8]
            ]
        );
    }

    public function testRulePolymorphism(): void
    {
        if (PHP_VERSION_ID >= 80000) {
            $this->analyse(
                [__DIR__ . '/TestFiles/NoMagicToStringRuleTestPolymorphismFilePhp8.php'],
                [
                    [sprintf("Don't use interface %s", \Stringable::class), 14]
                ]
            );

            return;
        }

        $this->analyse(
            [__DIR__ . '/TestFiles/NoMagicToStringRuleTestPolymorphismFile.php'],
            [
                ['Don\'t use magic method __toString', 16]
            ]
        );
    }

    protected function getRule(): Rule
    {
        return new NoMagicToStringRule();
    }
}
