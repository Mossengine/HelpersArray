<?php namespace Mossengine\Helpers\_Array;

use Illuminate\Support\Arr;

/**
 * Class _Some
 * @package Mossengine\Helpers\_Array
 */
class _Some
{

    /**
     * @param array $array
     * @param callable $callable
     * @return bool
     */
    public static function _Some(array $array, callable $callable) : bool {
        foreach ($array as $key => $item) {
            if (
                (
                    is_callable($callable)
                    && call_user_func($callable, $item, $key)
                )
                || (
                    !is_callable($callable)
                    && $item
                )
            ) {
                return true;
            }
        }

        return false;
    }

}