<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\CreatePropertyOwnerRequest;
use App\Http\Requests\UpdatePropertyOwnerRequest;
use App\Actions\PropertyOwner\GetAllPaginatePropertyOwnerAction;
use App\Actions\PropertyOwner\GetAllPropertyOwnerAction;
use App\Actions\PropertyOwner\CreatePropertyOwnerAction;
use App\Actions\PropertyOwner\UpdatePropertyOwnerAction;
use App\Actions\PropertyOwner\DeletePropertyOwnerAction;
use App\Actions\PropertyOwner\GetByIdPropertyOwnerAction;


class PropertyOwnerController extends Controller
{

    public function getAllPaginate(Request $request){

        $filters =  $request->all();

        $propertyOwner = new GetAllPaginatePropertyOwnerAction();

        $response = $propertyOwner->execute($filters);

        return response()->json($response);
    }

    public function getAll(){

        $propertyOwner = new GetAllPropertyOwnerAction();

        $response = $propertyOwner->execute();

        return response()->json($response);
    }

    public function getById($id){

        $propertyOwner = new GetByIdPropertyOwnerAction();

        $response = $propertyOwner->execute($id);

        return response()->json($response);
    }

    public function store(CreatePropertyOwnerRequest $request){

        $data =  $request->all();

        $propertyOwner = new CreatePropertyOwnerAction();

        $response = $propertyOwner->execute($data);

        return response()->json($response);
    }

    public function update(UpdatePropertyOwnerRequest $request, $id){

        $data =  $request->all();

        $propertyOwner = new UpdatePropertyOwnerAction();

        $response = $propertyOwner->execute($data, $id);

        return response()->json($response);
    }

    public function delete($id){

        $propertyOwner = new DeletePropertyOwnerAction();

        $response = $propertyOwner->execute($id);

        return response()->json($response);
    }

}
