<?php namespace Mossengine\Helpers\_Array;

/**
 * Class _FirstValue
 * @package Mossengine\Helpers\_Array
 */
class _FirstValue
{

    /**
     * @param array $array
     * @param null $mixedDefault
     * @return false|mixed|null
     */
    public static function _FirstValue(array $array, $mixedDefault = null) {
        return _NthValue::_NthValue($array, 1, $mixedDefault);
    }

}