<?php
declare(strict_types=1);

/**
 * User: Patrick Luca Fazzi
 * Date: 25/03/19
 * Time: 12.13
 */

namespace Pfazzi\Email\Tests;

use Pfazzi\Email\Email;
use PHPUnit\Framework\TestCase;

class EmailTest extends TestCase
{
    public function testCreateFromString()
    {
        $email = Email::fromString('test@patrickfazzi.it');

        self::assertEquals('test@patrickfazzi.it', $email->toString());
    }

    public function testCreateFromInvalidString()
    {
        self::expectException(\InvalidArgumentException::class);
        self::expectExceptionMessage('Value "invalid-email-address" was expected to be a valid e-mail address.');

        Email::fromString('invalid-email-address');
    }
}
