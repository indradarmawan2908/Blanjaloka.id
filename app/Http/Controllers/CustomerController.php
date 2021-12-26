<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function index() 
    {
        $customer = Customer::all();
        return view('customer.index')->with('customer', $customer);
    }

    public function create() 
    {
        return view('customer.create');
    }

    public function input(Request $request) 
    {
        $customer = new Customer;
        $customer->nama = $request->nama;
        $customer->nomor_telepon = $request->nomor_telepon;
        $customer->email = $request->email;
        $customer->alamat = $request->alamat;
        $customer->save();
        return redirect('customer');
    }
    public function delete($id_customer)
    {
        $customer = Customer::find($id_customer);
        $customer -> delete();
        return redirect('customer');
    }

}
