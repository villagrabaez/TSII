<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCustomerRequest;
use App\Http\Requests\UpdateCustomerRequest;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        return view('customers.index', ['customers' => Customer::all()]);
    }

    public function create()
    {
        return view('customers.create');
    }

    public function store(StoreCustomerRequest $request)
    {
        Customer::create([
            'name' => $request['name'],
            'phone' => $request['phone'],
            'email' => $request['email'],
            'address' => $request['address'],
        ]);

        return redirect()->route('clientes.index')->with('message', 'El cliente se creo correctamente...');
    }

    public function edit($id)
    {
        $customer = Customer::findOrFail($id);

        return view('customers.edit', compact('customer'));
    }

    public function update(UpdateCustomerRequest $request, $id)
    {
        $customer = Customer::FindOrFail($id);

        $customer->fill($request->all())->save();

        return redirect()->route('clientes.index')->with('message', 'El cliente se actualizo correctamente...');
    }

    public function destroy($id)
    {
        $customer = Customer::findOrFail($id);

        $customer->delete();

        return redirect()->route('clientes.index')->with('message', 'Cliente eliminado...');
    }
}
