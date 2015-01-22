<?php

use Illuminate\Routing\Controller;

class BaseController extends Controller
{
    protected $user;

    public function __construct()
    {
        $this->user = Auth::user();
    }
    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }
}

