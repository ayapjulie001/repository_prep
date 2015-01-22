<?php

namespace TopHomes\Common;

class Helper
{


    public static function getBaseClass($obj)
    {
        $class = explode('\\', get_class($obj));
        $class = array_pop($class);

        return $class;
    }

    public static function camelCaseToWordWithSpace($input)
    {
        preg_match_all('/((?:^|[A-Z])[a-z]+)/', $input, $matches);

        $word = '';

        foreach ($matches[0] as $match)
            $word .= $match . ' ';

        return $word;
    }
}