<?php
declare(strict_types=1);

namespace FrankVanHest\PhpStanRulesNoMagic\Tests\NoMagicCallRule;

use FrankVanHest\PhpStanRulesNoMagic\NoMagicCallRule;
use PHPStan\Rules\Rule;
use PHPStan\Testing\RuleTestCase;

/**
 * @extends RuleTestCase<NoMagicCallRule>
 */
final class NoMagicCallRuleTest extends RuleTestCase
{
    public function testRuleClass(): void
    {
        $this->analyse(
            [__DIR__ . '/TestFiles/NoMagicCallRuleTestClassFile.php'],
            [
                ['Don\'t use magic method __call', 11]
            ]
        );
    }

    public function testRulePolymorphism(): void
    {
        $this->analyse(
            [__DIR__ . '/TestFiles/NoMagicCallRuleTestPolymorphismFile.php'],
            [
                ['Don\'t use magic method __call', 19]
            ]
        );
    }

    protected function getRule(): Rule
    {
        return new NoMagicCallRule();
    }
}
