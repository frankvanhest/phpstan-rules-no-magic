<?php
declare(strict_types=1);

namespace FrankVanHest\PhpStanRulesNoMagic\Tests\NoMagicGetRule;

use FrankVanHest\PhpStanRulesNoMagic\NoMagicGetRule;
use PHPStan\Rules\Rule;
use PHPStan\Testing\RuleTestCase;

/**
 * @extends RuleTestCase<NoMagicGetRule>
 */
final class NoMagicGetRuleTest extends RuleTestCase
{
    public function testRuleClass(): void
    {
        $this->analyse(
            [__DIR__ . '/TestFiles/NoMagicGetRuleTestClassFile.php'],
            [
                ['Don\'t use magic method __get', 8]
            ]
        );
    }

    public function testRulePolymorphism(): void
    {
        $this->analyse(
            [__DIR__ . '/TestFiles/NoMagicGetRuleTestPolymorphismFile.php'],
            [
                ['Don\'t use magic method __get', 16]
            ]
        );
    }

    protected function getRule(): Rule
    {
        return new NoMagicGetRule();
    }
}
