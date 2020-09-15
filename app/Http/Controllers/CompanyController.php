<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index() {
        return view('companies.index', ['companies' => Company::orderBy('name')->get()]);
    }

    public function create() {
        return view('companies.create');
    }

    public function store(Request $request) {
        $company = new Company();
        $company->fill($request->all());
        $company->save();
        return redirect()->route('company.index');
    }

    public function edit(Company $company){
            return view('companies.edit', ['company' => $company]);
    }
        
    public function update(Request $request, Company $company){
            $company->fill($request->all());
            $company->save();
            return redirect()->route('company.index');
    }

    public function destroy(Company $company){
            $company->delete();
            return redirect()->route('company.index');
    }
    
}
