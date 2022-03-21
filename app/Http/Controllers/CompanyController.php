<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Company;

class CompanyController extends Controller
{
    public function index() {
        $companies = Company::all();

        return $companies;
    }

    public function create(Request $request) {
        if($request->password !== $request ->confirm_password) {
            return 'Password does not match';
        }

        $company = new Company();

        $company->name = $request->name;
        $company->email = $request->email;
        $company->password = $request->password;
        $company->description = $request->description;
        $company->cpf = $request->cnpj;

        $company->save();

        return 'Ok';
    }

    public function edit(Request $request, $id) {
        $company = Company()::findOrFail($id);

        $company->name = $request->name;
        $company->email = $request->email;
        $company->password = $request->password;
        $company->description = $request->description;
        $company->cpf = $request->cnpj;

        $company->save();

        return 'Ok';
    }
}
