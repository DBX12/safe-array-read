# Safe array reading

Normally, this should not be something you need, because you don't know how to do it. If you don't know how to read
safely from an array I suggest to read the code of this "library". I put that in quotes intentionally, as a class with
one static function is hardly a library.

However, I created this repository for the sake of simplicity. In most of my projects, I have a file somewhere called
"utilities.php" and this file holds such helper methods; over time, more methods are added as they not exactly fit into
the controller or the model of the MVC pattern. To prevent this chaos, the method is added via dependency.

Normally I hate libraries like the "is-odd" library from npm but I hope, community and my future self forgive me.

## About the version constraint
I only tested it with phpunit 7.5.1 which runs on 7.0 or higher so I only assure it works on this configuration.
Older versions should be still supported.

## Usage
I'm not sure why I'm adding this, it's really simple to use:


```php
$array = [
    'foo' => 1
];
\dbx12\SafeArrayRead::read('foo', $array, 'baz');
# returns 1
\dbx12\SafeArrayRead::read('bar', $array, 'baz');
# returns baz````
```

(Fun fact: This README file is bigger than the actual source code.)