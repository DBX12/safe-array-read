<?php

namespace dbx12;


use ArrayObject;
use Exception;

class SafeArrayRead
{
    /**
     * Reads safely from an array. Returns the value at $key in $array if the key exists, if not $default is returned
     * @param string|int $key
     * @param array $array
     * @param mixed $default
     * @return mixed
     * @throws Exception if $array is not an primitive array or ArrayObject
     */
    public static function read($key, $array, $default = null)
    {
        if (!is_array($array) && !($array instanceof ArrayObject)) {
            throw new Exception('$array is not an array or ArrayObject');
        }

        if (array_key_exists($key, $array))
            return $array[$key];
        else
            return $default;
    }

}