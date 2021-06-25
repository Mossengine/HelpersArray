<?php namespace Mossengine\Helpers\_Array;

use Illuminate\Support\Arr;

/**
 * Class _Has
 * @package Mossengine\Helpers\_Array
 */
class _Has
{

    /**
     * @param array $array
     * @param $stringPath
     * @return bool
     */
    public static function _Has(array $array, $stringPath) : bool {
        return Arr::has($array, $stringPath);
    }

}