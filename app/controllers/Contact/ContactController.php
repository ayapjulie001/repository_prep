<?php


use TopHomes\Contact\Services\IContactService;

class ContactController extends \BaseController {

    protected $service;
    protected $response;
    protected $stub;

    function __construct( ContactResponse $response,
                          IContactService $service,
                          ContactStub $stub)
    {
        $this->response = $response;
        $this->service = $service;
        $this->stub = $stub;
    }

    /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$contacts = $this->service->findPaginatedList([]);

        return $this->response->respondPaginated($contacts);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        //
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
        $contact = $this->stub->createStub();

        $contact = $this->service->save($contact);

        return $this->response->respondCreated($contact);
	}


    /**
     * Display the specified resource.
     *
     * @param AdminMessage $contact
     * @internal param int $id
     * @return Response
     */
	public function show(AdminMessage $contact)
	{
		return $this->response->respondFound($contact);
	}


    /**
     * Show the form for editing the specified resource.
     *
     * @param AdminMessage $contact
     * @internal param int $id
     * @return Response
     */
	public function edit(AdminMessage $contact)
	{
		//
	}


    /**
     * Update the specified resource in storage.
     *
     * @param AdminMessage $contact
     * @internal param int $id
     * @return Response
     */
	public function update(AdminMessage $contact)
	{
		//
	}


    /**
     * Remove the specified resource from storage.
     *
     * @param AdminMessage $contact
     * @internal param int $id
     * @return Response
     */
	public function destroy(AdminMessage $contact)
	{
        $contact = $this->stub->deleteStub($contact);

        $this->service->delete($contact);

        return $this->response->respondDeleted($contact);
	}


}
