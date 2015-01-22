<?php
/**
 * Created JulieAnnAyap
 * Date: 1/9/2015
 * Time: 12:08 AM
 */


use TopHomes\Contact\Validators\ContactValidator;

class ContactStub {

    protected $validator;

    function __construct(ContactValidator $validator)
    {
        $this->validator = $validator;
    }

    public function createStub()
    {
        $contact = new AdminMessage(Input::all());

        $this->validator->validate($contact->toArray());

        return $contact;
    }

    public function deleteStub(AdminMessage $contact)
    {
        $contact->is_deleted = ! $contact->is_deleted;

        return $contact;
    }
} 
