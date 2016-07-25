<?php

/**
 * @method static string current() Returns current language code.
 * @method static void force(string $lang) Forces using a specific language code.
 * ...
 */
final class ExampleProxy
{
    use Statical;

    protected function targetClassInstance()
    {
        return new ExampleTargeClass();
    }
}
