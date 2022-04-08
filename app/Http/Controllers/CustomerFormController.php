<?php

namespace App\Http\Controllers;

use App\Http\Resources\CustomerFormResources\CustomerFormCollection;
use App\Http\Resources\CustomerFormResources\CustomerFormResource;
use App\Models\CustomerForm;
use Illuminate\Http\Request;

class CustomerFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): CustomerFormCollection
    {
        return new CustomerFormCollection(CustomerForm::paginate());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $customerForm = new CustomerForm();
        $request->validate([
            'trackingCode' => 'required',
            'city' => 'required',
            'serviceName' => 'required',
            'formStatus' => 'required',
            'data' => 'required',
        ]);
        $customerForm->trackingCode = $request->trackingCode;
        $customerForm->city = $request->city;
        $customerForm->serviceName = $request->serviceName;
        $customerForm->customerID = $request->customerID;
        $customerForm->formStatus = $request->formStatus;
        $customerForm->data = $request->data;

        if ($customerForm->save()) {
            return response([
                'data' => new CustomerFormResource($customerForm)
            ], 201);
        } else {
            return 'Error';
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CustomerForm  $customerForm
     * @return \Illuminate\Http\Response
     */
    public function show(CustomerForm $customerForm): CustomerFormResource
    {
        return new CustomerFormResource($customerForm);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CustomerForm  $customerForm
     * @return \Illuminate\Http\Response
     */
    public function edit(CustomerForm $customerForm)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CustomerForm  $customerForm
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CustomerForm $customerForm): CustomerFormResource
    {
        $customerForm->update($request->all());
        return new CustomerFormResource($customerForm);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CustomerForm  $customerForm
     * @return \Illuminate\Http\Response
     */
    public function destroy(CustomerForm $customerForm)
    {
        $customerForm->delete();
        return 'Successffully Deleted!';
    }
}
