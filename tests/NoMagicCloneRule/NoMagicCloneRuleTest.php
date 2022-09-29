<?php
declare(strict_types=1);

namespace FrankVanHest\PhpStanRulesNoMagic\Tests\NoMagicCloneRule;

use FrankVanHest\PhpStanRulesNoMagic\NoMagicCloneRule;
use PHPStan\Rules\Rule;
use PHPStan\Testing\RuleTestCase;

/**
 * @extends RuleTestCase<NoMagicCloneRule>
 */
final class NoMagicCloneRuleTest extends RuleTestCase
{
    public function testRuleClass(): void
    {
        $this->analyse(
            [__DIR__ . '/TestFiles/NoMagicCloneRuleTestClassFile.php'],
            [
                ['Don\'t use magic method __clone', 8]
            ]
        );
    }

    public function testRulePolymorphism(): void
    {
        $this->analyse(
            [__DIR__ . '/TestFiles/NoMagicCloneRuleTestPolymorphismFile.php'],
            [
                ['Don\'t use magic method __clone', 16]
            ]
        );
    }

    protected function getRule(): Rule
    {
        return new NoMagicCloneRule();
    }
}
