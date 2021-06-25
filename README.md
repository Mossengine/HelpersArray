<h1 align="center">Mossengine/HelpersArray</h1>

<p align="center">
    <strong>A PHP sub library for the Mossengine/Helper library that provides Array helper functions</strong>
</p>

<p align="center">
    <a href="https://github.com/Mossengine/HelpersArray"><img src="https://badgen.net/packagist/name/Mossengine/HelpersArray" alt="Source Code"></a>
    <a href="https://packagist.org/packages/Mossengine/HelpersArray"><img src="https://badgen.net/packagist/v/Mossengine/HelpersArray" alt="Download Package"></a>
    <a href="https://php.net"><img src="https://badgen.net/packagist/php/Mossengine/HelpersArray" alt="PHP Programming Language"></a>
    <img src="https://badgen.net/circleci/github/Mossengine/HelpersArray/master?icon=circleci" alt="Build Status">
    <a href="https://codecov.io/github/Mossengine/HelpersArray"><img src="https://badgen.net/codecov/c/github/Mossengine/HelpersArray/master?icon=codecov" alt="Codecov Code Coverage"></a>
    <a href="https://github.com/Mossengine/HelpersArray/blob/master/LICENSE"><img src="https://badgen.net/packagist/license/Mossengine/HelpersArray" alt="Read License"></a>
    <a href="https://packagist.org/packages/Mossengine/HelpersArray/stats"><img src="https://badgen.net/packagist/dt/Mossengine/HelpersArray" alt="Package downloads on Packagist"></a>
</p>

## About
This library can be used on it's own, however, it is intended to be used with the [Mossengine/Helper](https://github.com/Mossengine/Helper) library.

There is a group of Array type classes with single methods within that single out logic only needed for the given use, you can call them directly or using the Mossgnein Helper you can call into them simply without needing to use them in your project.
## Installation

### Using composer to install
```
$ composer require mossengine/helpersarray
```

### Adding to package.json
```json
{
    "require": {
        "mossengine/helpersarray": "~1.0.0"
    }
}
```

## Usage

### Call helper method on a specific helper class 
```php
// Require the autoloader, normal composer stuff
require 'vendor/autoload.php';

// Direct usage ( not intended )
$result = Mossengine\Helpers\_Array\_IsAssociative::_IsAssociative(['a' => 'A']);

// Mossengine Helper usage ( intended )
$result = Mossengine\Helper::Array()->IsAssociative(['a' => 'A']);
```

## Documentation
Read the <a href="/docs/readme.md">docs</a> for more details on Helpers Array methods.
