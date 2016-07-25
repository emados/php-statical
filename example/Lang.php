<?php

namespace PhpStatical\Example;

/**
 * @method static string current() Returns current language code.
 * @method static void force(string $lang) Forces using a specific language code.
 * ...
 */
final class Lang
{
    use Statical;

    protected function targetClassInstance()
    {
        return new Language();
    }
}
