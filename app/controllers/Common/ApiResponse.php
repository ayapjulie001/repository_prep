<?php
/**
 * Created JulieAnnAyap
 * Date: 01/6/15
 * Time: 5:45 PM
 */


use Illuminate\Support\Facades\Response;
use Illuminate\Pagination\Paginator as Paginator;

class ApiResponse
{
    const HTTP_OK = 200; //Response to a successful GET, PUT, PATCH or DELETE. Can also be used for a POST that doesn't result in a creation.
    const HTTP_CREATED = 201; //Response to a POST that results in a creation. Should be combined with a Location header pointing to the location of the new resource
    const HTTP_NO_CONTENT = 204; //Response to a successful request that won't be returning a body (like a DELETE request)
    const HTTP_NOT_MODIFIED = 304; //Used when HTTP caching headers are in play

    protected $statusCode = 200;
    protected $response;

    function __construct(Response $response)
    {
        $this->response = $response;
    }

    protected function setStatusCode($statusCode)
    {
        $this->statusCode = $statusCode;

        return $this;
    }

    protected function getStatusCode()
    {
        return $this->statusCode;
    }

    protected function respond($data, $headers = [])
    {
        return $this->response->json($data, $this->getStatusCode(), $headers);
    }

    protected function getPagination(Paginator $paginator) {
        return [
            'current_page' => $paginator->getCurrentPage(),
            'last_page' => $paginator->getLastPage(),
            'per_page' => $paginator->getPerPage(),
            'total' => $paginator->getTotal(),
            'from' => $paginator->getFrom(),
            'to' => $paginator->getTo(),
            'count' => $paginator->count()
        ];
    }
} 