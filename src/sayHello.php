<?php

namespace ptc\SayHello;

class sayHello
{
    public static function world()
    {
        return 'Hello World, Composer!';
    }

    public static function getTime()
    {
        return date('d-m-Y');
    }

    public static function sayGoodBy()
    {
        return 'Say good bye';
    }

    public static function hello()
    {
        return 'Say hello';
    }
}