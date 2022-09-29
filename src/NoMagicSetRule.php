<?php
declare(strict_types=1);

namespace FrankVanHest\PhpStanRulesNoMagic;

use PhpParser\Node;
use PhpParser\Node\Stmt\ClassMethod;
use PHPStan\Analyser\Scope;
use PHPStan\Rules\Rule;
use PHPStan\Rules\RuleErrorBuilder;

/**
 * @implements Rule<ClassMethod>
 */
final class NoMagicSetRule implements Rule
{
    public function getNodeType(): string
    {
        return ClassMethod::class;
    }

    /**
     * @param ClassMethod $node
     */
    public function processNode(Node $node, Scope $scope): array
    {
        if ($node->name->toString() !== '__set') {
            return [];
        }

        return [RuleErrorBuilder::message('Don\'t use magic method __set')->build()];
    }
}
