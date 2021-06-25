<?php namespace Mossengine\Helpers\_Array;

/**
 * Class _FirstKey
 * @package Mossengine\Helpers\_Array
 */
class _FirstKey
{

    /**
     * @param array $array
     * @param null $mixedDefault
     * @return false|mixed|null
     */
    public static function _FirstKey(array $array, $mixedDefault = null) {
        return _NthKey::_NthKey($array, 1, $mixedDefault);
    }

}