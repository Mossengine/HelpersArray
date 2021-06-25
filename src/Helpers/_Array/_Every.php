<?php namespace Mossengine\Helpers\_Array;

/**
 * Class _Every
 * @package Mossengine\Helpers\_Array
 */
class _Every
{

    /**
     * @param array $array
     * @param callable|null $callable
     * @return bool
     */
    public static function _Every(array $array, callable $callable = null) : bool {
        foreach ($array as $key => $item) {
            if (
                (
                    is_callable($callable)
                    && !call_user_func($callable, $item, $key)
                )
                || (
                    !is_callable($callable)
                    && !$item
                )
            ) {
                return false;
            }
        }

        return true;
    }

}