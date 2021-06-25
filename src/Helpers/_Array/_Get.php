<?php namespace Mossengine\Helpers\_Array;

use Illuminate\Support\Arr;

/**
 * Class _Get
 * @package Mossengine\Helpers\_Array
 */
class _Get
{

    /**
     * @param $array
     * @param $stringPath
     * @param null $mixedDefault
     * @return array|\ArrayAccess|mixed
     */
    public static function _Get($array, $stringPath, $mixedDefault = null) {
        return (
        !is_array($array)
        || !Arr::has($array, $stringPath)
            ? $mixedDefault
            : Arr::get($array, $stringPath, $mixedDefault)
        );
    }

}