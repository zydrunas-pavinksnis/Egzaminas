<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
        
    public function index(){
        return view('customers.index', ['customers' => Customer::orderBy('surname')->get()]);
        }
    
    public function create(){
        $companies = \App\Company::orderBy('name')->get();
        return view('customers.create', ['companies' => $companies]);
    }
    
    public function store(Request $request){
        $customer = new Customer();
        $customer->fill($request->all());
        $customer->save();
        return redirect()->route('customer.index');
    }

    public function edit(Customer $customer){
        $companies = \App\Company::orderBy('name')->get();
        return view('customers.edit', ['customer' => $customer, 'companies' => $companies]);
    }

    public function update(Request $request, Customer $customer){
        $customer->fill($request->all());
        $customer->save();
        return redirect()->route('customer.index');
    }

        public function destroy(Customer $customer){
        $customer->delete();
        return redirect()->route('customer.index');
        }
}
