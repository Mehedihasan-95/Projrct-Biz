<?php

namespace App\Http\Controllers;

use App\Http\Resources\Package\PackageResource;
use App\Http\Resources\Package\PackageResourceCollection;
use App\Models\Package;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): PackageResourceCollection
    {
        return new PackageResourceCollection(Package::paginate());
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
        $package = new Package();
        $request->validate([
            'state' => 'required',
            'serviceName' => 'required',
            'packageName' => 'required',
            'info' => 'required'
        ]);
        $package->state = $request->state;
        $package->serviceName = $request->serviceName;
        $package->packageName = $request->packageName;
        $package->info = $request->info;

        if ($package->save()) {
            return response([
                'data' => new PackageResource($package)
            ], 201);
        } else {
            return 'Error';
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function show(Package $package)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function edit(Package $package)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Package $package): PackageResource
    {
        $package->update($request->all());
        return new PackageResource($package);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function destroy(Package $package)
    {
        $package->delete();
        return 'Successffully Deleted!';
    }
}
