<?php
/**
 * Created JulieAnnAyap
 * Date: 1/8/2015
 * Time: 11:51 PM
 */

namespace TopHomes\Contact\Transformers;


use TopHomes\Common\Transformers\Transformer;

class ContactTransformer extends Transformer{

    public function transform($contact)
    {
        return [
            'id' => (int)$contact->id,
            'first_name' => $contact->first_name,
            'last_name' => $contact->last_name,
            'email' => $contact->email,
            'contact_number' => $contact->contact_number,
            'country' => $contact->country()->first(),
            'topic' => $contact->topic,
            'message' => $contact->message,
            'is_deleted' => (bool)$contact->is_deleted,
        ];
    }
}
