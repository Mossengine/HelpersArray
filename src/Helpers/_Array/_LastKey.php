<?php namespace Mossengine\Helpers\_Array;

/**
 * Class _LastKey
 * @package Mossengine\Helpers\_Array
 */
class _LastKey
{

    /**
     * @param array $array
     * @param null $mixedDefault
     * @return false|mixed|null
     */
    public static function _LastKey(array $array, $mixedDefault = null) {
        return _NthKey::_NthKey($array, count($array), $mixedDefault);
    }

}