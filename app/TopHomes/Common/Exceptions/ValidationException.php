<?php
/**
 * Created JulieAnnAyap
 * Date: 01/6/15
 * Time: 5:45 PM
 */

namespace TopHomes\Common\Exceptions;


use Exception;
use Illuminate\Support\Contracts\ArrayableInterface;
use Illuminate\Support\Contracts\JsonableInterface;
use Illuminate\Support\MessageBag;

class ValidationException extends Exception implements ArrayableInterface, JsonableInterface
{
    protected $errors;

    function __construct(array $errors = array())
    {
        parent::__construct('Validation failed!');

        $this->errors = new MessageBag($errors);
    }

    public function getError($key, $format = null)
    {
        return $this->errors->get($key, $format);
    }

    /**
     * Convert the object to its JSON representation.
     *
     * @param  int $options
     * @return string
     */
    public function toJson($options = 0)
    {
        return $this->errors->toJson($options);
    }

    /**
     * Get the instance as an array.
     *
     * @return array
     */
    public function toArray()
    {
        return $this->errors->toArray();
    }
}