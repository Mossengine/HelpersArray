<?php namespace Mossengine\Helpers\_Array;

/**
 * Class _NthKey
 * @package Mossengine\Helpers\_Array
 */
class _NthKey
{

    /**
     * @param array $array
     * @param int $intKeyPosition
     * @param null $mixedDefault
     * @return array|\ArrayAccess|mixed|null
     */
    public static function _NthKey(array $array, int $intKeyPosition = 1, $mixedDefault = null) {
        return _Get::_Get(array_keys($array), ($intKeyPosition - 1), $mixedDefault);
    }

}