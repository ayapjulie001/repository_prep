<?php
/**
 * Created JulieAnnAyap
 * Date: 1/8/2015
 * Time: 11:22 PM
 */

namespace TopHomes\Contact\Bindings;


use Illuminate\Routing\Router;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use TopHomes\Contact\Repositories\IContactRepository;

class ContactBinding {

    protected $route;
    protected $repository;

    function __construct(IContactRepository $repository, Router $route)
    {
        $this->repository = $repository;
        $this->route = $route;
    }

    public function bind()
    {
        $this->route->bind('contacts', function($value, $route){
            $contacts = $this->repository->findById($value);

            if($contacts == null)
                throw new NotFoundHttpException;

            return $contacts;
        });
    }

} 
