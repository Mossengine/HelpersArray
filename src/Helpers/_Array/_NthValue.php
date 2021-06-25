<?php namespace Mossengine\Helpers\_Array;

/**
 * Class _NthValue
 * @package Mossengine\Helpers\_Array
 */
class _NthValue
{

    /**
     * @param array $array
     * @param int $intKeyPosition
     * @param null $mixedDefault
     * @return array|\ArrayAccess|mixed|null
     */
    public static function _NthValue(array $array, int $intKeyPosition = 1, $mixedDefault = null) {
        return _Get::_Get(array_values($array), ($intKeyPosition - 1), $mixedDefault);
    }

}