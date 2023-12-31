<?php

namespace App;

class Utility
{
    public static function printArr(array $array)
    {
        if (count($array) === 0) {
            // throw new \InvalidArgumentException("array is empty");
            throw new EmptyArrayException();
        }

        echo "<pre>";
        print_r($array);
        echo "</pre>";
    }
}

?>