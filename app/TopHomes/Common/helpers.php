<?php

if ( ! function_exists('get_base_class'))
{
    function get_base_class($obj)
    {
        $class = explode('\\', get_class($obj));
        $class =  array_pop($class);

        return $class;
    }
}