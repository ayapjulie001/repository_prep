<?php

namespace TopHomes\Common\Validators;

interface ValidatorInterface {

    function validate($data);

    function setRules($rules);
}
