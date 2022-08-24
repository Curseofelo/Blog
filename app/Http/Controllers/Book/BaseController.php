<?php

namespace App\Http\Controllers\Book;

use App\Http\Controllers\Controller;
use App\Services\Book\Service;

class BaseController extends Controller
{
    public $sevice;

    public function __construct(Service $service)
    {
       $this->sevice = $service;
    }
}
