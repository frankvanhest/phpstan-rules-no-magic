<?php
declare(strict_types=1);

namespace FrankVanHest\PhpStanRulesNoMagic;

use PhpParser\Node;
use PhpParser\Node\Stmt\Class_;
use PhpParser\Node\Stmt\ClassMethod;
use PHPStan\Analyser\Scope;
use PHPStan\Rules\Rule;
use PHPStan\Rules\RuleError;
use PHPStan\Rules\RuleErrorBuilder;

/**
 * @implements Rule<Class_|ClassMethod>
 */
final class NoMagicToStringRule implements Rule
{
    /**
     * @infection-ignore-all
     */
    public function getNodeType(): string
    {
        if (PHP_VERSION_ID >= 80000) {
            return Class_::class;
        }

        return ClassMethod::class;
    }

    /**
     * @param Class_|ClassMethod $node
     * @infection-ignore-all
     */
    public function processNode(Node $node, Scope $scope): array
    {
        switch ($node) {
            case $node instanceof ClassMethod:
                return $this->processClassMethodNode($node);
            case $node instanceof Class_:
                return $this->processClassNode($node);
            default:
                return [];
        }
    }

    /**
     * @return array<RuleError>
     */
    private function processClassNode(Class_ $node): array
    {
        foreach ($node->implements as $implement) {
            if ($implement->toString() === \Stringable::class) {
                return [RuleErrorBuilder::message(sprintf("Don't use interface %s", \Stringable::class))->build()];
            }
        }

        return [];
    }

    /**
     * @return array<RuleError>
     */
    private function processClassMethodNode(ClassMethod $node): array
    {
        if ($node->name->toString() !== '__toString') {
            return [];
        }

        return [RuleErrorBuilder::message('Don\'t use magic method __toString')->build()];
    }
}
