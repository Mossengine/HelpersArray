<?php namespace Mossengine\Helpers\_Array;

use Illuminate\Support\Arr;

/**
 * Class Forget
 * @package Mossengine\Helpers
 */
class _Forget
{

    /**
     * @param array $array
     * @param $stringPath
     * @return array
     */
    public static function _Forget(array $array, $stringPath) : array {
        Arr::forget($array, $stringPath);
        return $array;
    }

}