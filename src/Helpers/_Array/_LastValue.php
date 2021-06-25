<?php namespace Mossengine\Helpers\_Array;

/**
 * Class _LastValue
 * @package Mossengine\Helpers\_Array
 */
class _LastValue
{

    /**
     * @param array $array
     * @param null $mixedDefault
     * @return false|mixed|null
     */
    public static function _LastValue(array $array, $mixedDefault = null) {
        return _NthValue::_NthValue($array, count($array), $mixedDefault);
    }

}