<?php
/**
 * Created JulieAnnAyap
 * Date: 01/6/15
 * Time: 5:45 PM
 */

namespace TopHomes\Common\Exceptions;

use Exception;

class UnauthorizedException extends Exception
{
    public function __construct($message = 'Cant touch this', $code = 0, Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}