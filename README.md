# Email Value Object

This package contains a PHP class representing an email address as a [value object](https://martinfowler.com/bliki/ValueObject.html).


## Installation
Using Composer:
```sh
composer require pfazzi/email
```

## Example usages
```php
$email = Email::fromString('test@patrickfazzi.it');
```
