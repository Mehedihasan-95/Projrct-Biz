<?php

namespace App\Http\Controllers;

use App\Http\Resources\Package\PackageDetailResource;
use App\Http\Resources\Package\PackageDetailResourceCollection;
use App\Models\PackageDetail;
use Illuminate\Http\Request;

class PackageDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): PackageDetailResourceCollection
    {
        return new PackageDetailResourceCollection(PackageDetail::paginate());
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
        $packageDetail = new PackageDetail();
        $request->validate([
            'packageID' => 'required',
            'parentID' => 'required',
            'info' => 'required'
        ]);
        $packageDetail->packageID = $request->packageID;
        $packageDetail->parentID = $request->parentID;
        $packageDetail->info = $request->info;
        if ($packageDetail->save()) {
            return new PackageDetailResource($packageDetail);
        } else {
            return 'Error! Failed to create this package details.';
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PackageDetail  $packageDetail
     * @return \Illuminate\Http\Response
     */
    public function show(PackageDetail $packageDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PackageDetail  $packageDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(PackageDetail $packageDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PackageDetail  $packageDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PackageDetail $packageDetail): PackageDetailResource
    {
        if ($packageDetail->update($request->all())) {
            return new PackageDetailResource($packageDetail);
        } else {
            return 'Error! Update Failed.';
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PackageDetail  $packageDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(PackageDetail $packageDetail)
    {
        if ($packageDetail->delete()) {
            return 'Successfully Deleted!';
        } else {
            return 'Error! Delete Failed.';
        }
    }
}
