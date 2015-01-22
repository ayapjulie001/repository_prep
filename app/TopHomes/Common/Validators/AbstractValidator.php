<?php

namespace TopHomes\Common\Validators;

use Illuminate\Validation\Factory as Validator;
use TopHomes\Common\Exceptions\InvalidValidationRuleException;
use TopHomes\Common\Exceptions\ValidationException;

abstract class AbstractValidator implements IValidator
{

    protected $rules = [];
    protected $messages = [];
    protected $errors = [];
    protected $validator;

    public function __construct(Validator $validator)
    {
        $this->validator = $validator;
    }

    /**
     * checks if the given data is valid using its rules attribute
     *
     * @param $data
     * @return bool
     * @throws ValidationException
     */
    public function validate($data)
    {
        $validator = $this->validator->make($data, $this->rules, $this->messages);

        if ($validator->fails()) {
            throw new ValidationException($validator->messages()->toArray());
        }
    }

    /**
     * @param $name
     * @throws InvalidValidationRuleException
     * @return $this
     */
    public function setRules($name)
    {
        $rules = $name . '_rules';

        if (!isset($this->{$rules})) {
            throw new InvalidValidationRuleException;
        }

        $this->rules = $this->{$rules};

        return $this;
    }
}
