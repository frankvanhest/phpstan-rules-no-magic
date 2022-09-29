<?php
declare(strict_types=1);

namespace FrankVanHest\PhpStanRulesNoMagic\Tests\NoMagicCallStaticRule;

use FrankVanHest\PhpStanRulesNoMagic\NoMagicCallStaticRule;
use PHPStan\Rules\Rule;
use PHPStan\Testing\RuleTestCase;

/**
 * @extends RuleTestCase<NoMagicCallStaticRule>
 */
final class NoMagicCallStaticRuleTest extends RuleTestCase
{
    public function testRuleClass(): void
    {
        $this->analyse(
            [__DIR__ . '/TestFiles/NoMagicCallStaticRuleTestClassFile.php'],
            [
                ['Don\'t use magic method __callStatic', 16]
            ]
        );
    }

    public function testRulePolymorphism(): void
    {
        $this->analyse(
            [__DIR__ . '/TestFiles/NoMagicCallStaticStaticRuleTestPolymorphismFile.php'],
            [
                ['Don\'t use magic method __callStatic', 19]
            ]
        );
    }

    protected function getRule(): Rule
    {
        return new NoMagicCallStaticRule();
    }
}
