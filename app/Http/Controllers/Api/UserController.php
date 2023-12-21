<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\ApiCrud\CrudService;
use App\Services\ApiCrud\UserCrud;

class UserController extends Controller
{
    public function index(){

        return (new CrudService())->index(new UserCrud($data=1));
        
    }
}
