<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class CustomerController extends Controller
{
    public function index(){
        return response()->json(Customer::get(), 200);
    }
    public function show($id){
        return response()->json(Customer::find($id), 200);
    }
    public function save(Request $request){
        $customer = Customer::create($request->all());
        return response()->json($customer, 201);
    }
    public function update(Request $request, Customer $customer){
        $customer->update($request->all());
        return response()->json($customer, 200);
    }
    public function delete(Request $request, Customer $customer){
        $customer->delete();
        return response()->json(null, 204);
    }
   
}
