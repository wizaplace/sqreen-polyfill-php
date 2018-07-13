Polyfill for the Sqreen PHP extension.

[![Total Downloads](https://img.shields.io/packagist/dt/wizaplace/sqreen-polyfill.svg?style=flat-square)](https://packagist.org/packages/wizaplace/sqreen-polyfill)

Using [Sqreen's PHP extension](https://docs.sqreen.io/sqreen-for-php/getting-started-in-php/) requires us to use this pattern everywhere:

```php
if (extension_loaded('sqreen')) {
    sqreen\signup_track(['email' => $email])
}
```

This package is a polyfill re-declaring all the functions provided by Sqreen when the extension is not installed. In other words, after installing this polyfill you can rely on the function to exist:

```php
sqreen\signup_track(['email' => $email]);
```

If the extension is installed, everything will work as expected. If not (for example on your development machine) nothing will happen.

### Installation

```
composer require wizaplace/sqreen-polyfill
```

That's all you need to do!
