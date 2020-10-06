<?php

namespace App\Http\Controllers\Api;
use App\Doce;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DoceController extends BaseController
{
    public function __construct()
    {

        $this->classe = Doce::class;

    }
}
