<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\CreateUserRequest;
use App\Actions\User\CreateUserAction;

class UserController extends Controller
{

    public function store(CreateUserRequest $request){

        $data =  $request->all();

        $user = new CreateUserAction();

        $response = $user->execute($data);

        return response()->json($response);
    }

}
