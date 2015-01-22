<?php
/**
 * Created JulieAnnAyap
 * Date: 1/9/2015
 * Time: 12:08 AM
 */


use TopHomes\Contact\Transformers\ContactTransformer;

class ContactResponse extends ApiResponse{

    protected $transformer;
    protected $response;

    /**
     * @param Response $response
     * @param ContactTransformer $transformer
     */
    function __construct(Response $response, ContactTransformer $transformer)
    {
        $this->response = $response;
        $this->transformer = $transformer;
    }

    public function respondCommon(AdminMessage $contact, $message)
    {
        return $this->respond(
            [
                'data' => $this->transformer->transform($contact),
                'message' => $message
            ]
        );
    }

    public function respondFound(AdminMessage $contact)
    {
        return $this->respond(
            [
                'data' => $this->transformer->transform($contact)
            ]
        );
    }

    public function respondCreated(AdminMessage $contact)
    {
        return $this->respondCommon($contact, 'AdminMessage successfully sent');
    }

    /*public function respondUpdated(AdminMessage $contact)
    {
        return $this->respondCommon($contact, 'AdminMessage successfully updated');
    }*/

    public function respondDeleted(AdminMessage $contact)
    {
        $msg = $contact->is_deleted ? 'AdminMessage successfully deleted' : 'AdminMessage successfully restored';

        return $this->respondCommon($contact, $msg);
    }

    public function respondPaginated($contact)
    {
        return $this->respond(
            [
                'data' => $this->transformer->transformCollection($contact->all()),
                'pagination' => $this->getPagination($contact)
            ]
        );
    }

    public function respondList($contact)
    {
        return $this->respond(
            [
                'data' => $this->transformer->transformCollection($contact->all())
            ]
        );
    }

} 
