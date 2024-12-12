<?php

namespace Alraziabdulalim\GreetingsGenerator;

class Greetings
{
    private static $message = ['Hi', 'Hello', 'How Are You'];

    public static function greet()
    {
        return self::$message[array_rand(self::$message)];
    }
}
