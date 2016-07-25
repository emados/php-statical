# php-statical
Allows for easy aliases creation that proxies static calls to a single instance of a class.

## Installation

```bash
composer require emados/php-statical
```

## Usage

Create an alias class that will serve as a statical proxy for a specific class. For example,
 for a class named `App\Core\Language` you can either create an alias class for it in the same
 namespace but with a different name `App\Core\Lang` or use the same name in a different
 namespace `\Language` or both `Lang`.

```php
final class Lang {
    use Statical;
    
    protected function targetClassInstance() {
        return new \App\Core\Language();
    }
}
```

Now, you can use the proxy class will create a single instance for the target class, and allow
 to access all its public api statically.

## Notice
If you're using an IDE with the auto-complete feature, you probably now that it won't work
 with proxy classes (aliases), you can workaround this by using phpdoc annotations,
 although this will require you to update the docs of the proxy class each time you update
 the target class api.

```php
/**
 * @method static string current() Returns current language code.
 * @method static void force(string $lang) Forces using a specific language code.
 * ...
 */
final class Lang {
    use Statical;
    
    protected function targetClassInstance() {
        return new \App\Core\Language();
    }
}
```
