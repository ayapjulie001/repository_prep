<?php
/**
 * Created JulieAnnAyap
 * Date: 1/8/2015
 * Time: 11:58 PM
 */

namespace TopHomes\Contact\Validators;


use TopHomes\Common\Validators\AbstractValidator;

class ContactValidator extends AbstractValidator{

    protected $rules = [
        'first_name' => 'required',
        'last_name' => 'required',
        'email' => 'required|email',
        'contact_number' => 'required',
        'country_id' => 'required',
        'topic' => 'required',
        'message' => 'required'
    ];

} 
