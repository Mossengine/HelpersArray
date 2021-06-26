<?php namespace Mossengine\Helpers\_Array;

use Illuminate\Support\Arr;

/**
 * Class _Set
 * @package Mossengine\Helpers\_Array
 */
class _Set
{

    /**
     * @param array $array
     * @param $stringPath
     * @param $mixedValue
     * @return array
     */
    public static function _Set(array $array, $stringPath, $mixedValue) : array {
        Arr::set($array, $stringPath, $mixedValue);
        return $array;
    }

}