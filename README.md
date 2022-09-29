# PHPStan - Rules - No Magic

Basically these rules prevent you from using PHP magic methods. 
If you are looking for a Runtime usage prevention of these methods, use https://github.com/Roave/Dont.

* [Installation](#installation)
* [Usage](#usage)
* [Contribution](#contribution)
* [License](#license)

## Installation

```
composer require frankvanhest/phpstan-rules-no-magic
```

## Usage

Just include the following in your `phpstan.neon` file to prevent the methods `__call`, `__callStatic`, `__clone`
, `__wakeup`, `__unserialize`, `unserialize`, `__get`, `__sleep`, `__serialize`, `serialize`, `__set` and `__toString`.

```neon
includes:
    - vendor/frankvanhest/phpstan-rules-no-magic/config/no-magic.neon
```

Of course, you can customize which methods should be prevented by choosing the desired rules.

For `__call`:
```neon
rules:
    - FrankVanHest\PhpStanRulesNoMagic\NoMagicCallRule
```

For `__callStatic`:
```neon
rules:
    - FrankVanHest\PhpStanRulesNoMagic\NoMagicCallStaticRule
```

For `__clone`:
```neon
rules:
    - FrankVanHest\PhpStanRulesNoMagic\NoMagicCloneRule
```

For `__wakeup`, `__unserialize` and `unserialize` (use of `Serializable` interface):
```neon
rules:
    - FrankVanHest\PhpStanRulesNoMagic\NoMagicDeserializeRule
```

For `__get`:
```neon
rules:
    - FrankVanHest\PhpStanRulesNoMagic\NoMagicGetRule
```

For `__sleep`, `__serialize`  and `serialize` (use of `Serializable` interface):
```neon
rules:
    - FrankVanHest\PhpStanRulesNoMagic\NoMagicSerializeRule
```
For `__set`:
```neon
rules:
    - FrankVanHest\PhpStanRulesNoMagic\NoMagicSetRule
```

For `__toString`:
```neon
rules:
    - FrankVanHest\PhpStanRulesNoMagic\NoMagicToStringRule
```

## Contribution

Feel free to submit an issue of pull request. When it comes to a pull request I'm curious of how it improves this
packages of which problem it may solve.

There are some requirements:

- Use PSR-12 for code styling
- Write a test for every meaningful change

## License

See [LICENCE](LICENSE.md)
