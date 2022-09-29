<?php
declare(strict_types=1);

namespace FrankVanHest\PhpStanRulesNoMagic\Tests\NoMagicSetRule;

use FrankVanHest\PhpStanRulesNoMagic\NoMagicSetRule;
use PHPStan\Rules\Rule;
use PHPStan\Testing\RuleTestCase;

/**
 * @extends RuleTestCase<NoMagicSetRule>
 */
final class NoMagicSetRuleTest extends RuleTestCase
{
    public function testRuleClass(): void
    {
        $this->analyse(
            [__DIR__ . '/TestFiles/NoMagicSetRuleTestClassFile.php'],
            [
                ['Don\'t use magic method __set', 8]
            ]
        );
    }

    public function testRulePolymorphism(): void
    {
        $this->analyse(
            [__DIR__ . '/TestFiles/NoMagicSetRuleTestPolymorphismFile.php'],
            [
                ['Don\'t use magic method __set', 16]
            ]
        );
    }

    protected function getRule(): Rule
    {
        return new NoMagicSetRule();
    }
}
