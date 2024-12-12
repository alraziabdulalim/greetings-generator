<?php

namespace Alraziabdulalim\GreetingsGenerator\Tests;

use Alraziabdulalim\GreetingsGenerator\Greetings;
use PHPUnit\Framework\TestCase;

class GreetingsTest extends TestCase
{
    public function test_generates_random_greeting()
    {
        $message = ['Hi', 'Hello', 'How Are You'];

        $this->assertContains(Greetings::greet(), $message);
    }
}
