<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    protected $customer;
//
    public function __construct(Customer $customer)
    {
        $this->customer = $customer;
        $this->middleware("auth");
    }

    public function show()
    {
        $customers = $this->customer->all();
        return view("customer.list", compact("customers"));
    }

    public function edit($id)
    {
        $customer = $this->customer->findOrFail($id);
        return view("customer.update", compact("customer"));
    }

    public function update(Request $request, $id)
    {
        $customer = $this->customer->findOrFail($id);
        $customer->name = $request->name;
        $customer->address = $request->address;
        $customer->email = $request->email;
        $customer->save();
        return redirect()->route('customer.list');
    }

    public function destroy($id)
    {
        $customer =$this->customer->findOrFail($id);
        $customer->delete();
        return redirect()->route('customer.list');
    }

    public function create()
    {
        return view("customer.create");
    }

    public function success(Request $request)
    {
        $this->customer->all();
        $customers = new Customer();
        $customers->name = $request->name;
        $customers->address = $request->address;
        $customers->email = $request->email;
        $customers->save();
        return redirect()->route('customer.list');
    }
}
