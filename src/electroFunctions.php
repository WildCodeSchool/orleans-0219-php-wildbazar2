<?php
/**
 * Created by PhpStorm.
 * User: wilder
 * Date: 22/03/19
 * Time: 10:36
 */

function cleanArray(array $array): array
{
    foreach ($array as $key => $value) {
        $array[$key] = trim($value);
    }
    return $array;
}