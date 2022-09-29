<?php
declare(strict_types=1);

namespace FrankVanHest\PhpStanRulesNoMagic;

use PhpParser\Node;
use PhpParser\Node\Stmt\Class_;
use PHPStan\Analyser\Scope;
use PHPStan\Rules\Rule;
use PHPStan\Rules\RuleErrorBuilder;

/**
 * @implements Rule<Class_>
 */
final class NoMagicDeserializeRule implements Rule
{
    public function getNodeType(): string
    {
        return Class_::class;
    }

    /**
     * @param Class_ $node
     */
    public function processNode(Node $node, Scope $scope): array
    {
        $errors = [];
        foreach ($node->implements as $implement) {
            if ($implement->toString() === \Serializable::class) {
                $errors[] = RuleErrorBuilder::message(sprintf("Don't use interface %s", \Serializable::class))->build();
            }
        }

        foreach ($node->getMethods() as $nodeMethod) {
            switch ($nodeMethod->name->toString()) {
                case '__wakeup':
                    $errors[] = RuleErrorBuilder::message('Don\'t use magic method __wakeup')
                        ->line($nodeMethod->getLine())
                        ->build();
                    break;
                case '__unserialize':
                    $errors[] = RuleErrorBuilder::message('Don\'t use magic method __unserialize')
                        ->line($nodeMethod->getLine())
                        ->build();
                    break;
            }
        }

        return $errors;
    }
}
