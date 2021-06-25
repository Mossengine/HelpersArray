<?php namespace Mossengine\Helpers\_Array;

/**
 * Class _IsAssociative
 * @package Mossengine\Helpers\_Array
 */
class _IsAssociative
{

    /**
     * @param array $array
     * @return bool
     */
    public static function _IsAssociative(array $array): bool {
        return (
            !([] === $array)
            && array_keys($array) !== range(0, count($array) - 1)
        );
    }

}