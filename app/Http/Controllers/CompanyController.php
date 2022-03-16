<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\CreateCompanyRequest;
use App\Http\Requests\UpdateCompanyRequest;
use App\Actions\Company\GetAllPaginateCompanyAction;
use App\Actions\Company\GetAllCompanyAction;
use App\Actions\Company\CreateCompanyAction;
use App\Actions\Company\UpdateCompanyAction;
use App\Actions\Company\DeleteCompanyAction;
use App\Actions\Company\GetByIdCompanyAction;


class CompanyController extends Controller
{

    public function getAllPaginate(Request $request){

        $filters =  $request->all();

        $company = new GetAllPaginateCompanyAction();

        $response = $company->execute($filters);

        return response()->json($response);
    }

    public function getAll(){

        $company = new GetAllCompanyAction();

        $response = $company->execute();

        return response()->json($response);
    }

    public function getById($id){

        $company = new GetByIdCompanyAction();

        $response = $company->execute($id);

        return response()->json($response);
    }

    public function store(CreateCompanyRequest $request){

        $data =  $request->all();

        $company = new CreateCompanyAction();

        $response = $company->execute($data);

        return response()->json($response);
    }

    public function update(UpdateCompanyRequest $request, $id){

        $data =  $request->all();

        $company = new UpdateCompanyAction();

        $response = $company->execute($data, $id);

        return response()->json($response);
    }

    public function delete($id){

        $company = new DeleteCompanyAction();

        $response = $company->execute($id);

        return response()->json($response);
    }

}
