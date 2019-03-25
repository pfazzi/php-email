<?php
declare(strict_types=1);

/**
 * User: Patrick Luca Fazzi
 * Date: 25/03/19
 * Time: 12.03
 */

namespace Pfazzi\Email;

class Email
{
    /**
     * @var string
     */
    private $value;

    private function __construct(string $value)
    {
        if (!\filter_var($value, FILTER_VALIDATE_EMAIL)) {
            $message = \sprintf('Value "%s" was expected to be a valid e-mail address.', $value);
            throw new \InvalidArgumentException($message);
        }
        
        $this->value = $value;
    }

    public static function fromString(string $string): self
    {
        return new self($string);
    }

    public function toString(): string
    {
        return (string) $this;
    }

    public function __toString()
    {
        return $this->value;
    }
}
