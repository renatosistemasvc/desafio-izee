<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\CreatePropertyRequest;
use App\Http\Requests\UpdatePropertyRequest;
use App\Actions\Property\GetAllPaginatePropertyAction;
use App\Actions\Property\GetAllPropertyAction;
use App\Actions\Property\CreatePropertyAction;
use App\Actions\Property\UpdatePropertyAction;
use App\Actions\Property\DeletePropertyAction;
use App\Actions\Property\GetByIdPropertyAction;


class PropertyController extends Controller
{

    public function getAllPaginate(Request $request){

        $filters =  $request->all();

        $property = new GetAllPaginatePropertyAction();

        $response = $property->execute($filters);

        return response()->json($response);
    }

    public function getAll(){

        $property = new GetAllPropertyAction();

        $response = $property->execute();

        return response()->json($response);
    }

    public function getById($id){

        $property = new GetByIdPropertyAction();

        $response = $property->execute($id);

        return response()->json($response);
    }

    public function store(CreatePropertyRequest $request){

        $data =  $request->all();

        $property = new CreatePropertyAction();

        $response = $property->execute($data);

        return response()->json($response);
    }

    public function update(UpdatePropertyRequest $request, $id){

        $data =  $request->all();

        $property = new UpdatePropertyAction();

        $response = $property->execute($data, $id);

        return response()->json($response);
    }

    public function delete($id){

        $property = new DeletePropertyAction();

        $response = $property->execute($id);

        return response()->json($response);
    }

}
