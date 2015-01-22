<?php

namespace TopHomes\Common\Validators;

interface IValidator {

    function validate($data);

    function setRules($rules);
}
