<?php

namespace App\Http\Controllers;

use App\app_delivery_stores;
use Illuminate\Http\Request;

class AppDeliveryStoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Shows the stores list
        $datos['stores']=app_delivery_stores::paginate(5);
        return view('delivery.stores.list',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Shows the stores creation form
        return view('delivery.stores.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Collects the new store information
        $newObject = request()->except('_token');
        app_delivery_stores::insert($newObject); //Entity name can be found at use App\app_delivery_stores;
        return response()->json($newObject);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\app_delivery_stores  $app_delivery_stores
     * @return \Illuminate\Http\Response
     */
    public function show(app_delivery_stores $app_delivery_stores)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\app_delivery_stores  $app_delivery_stores
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Edit a store
        $store = app_delivery_stores::findOrFail($id);
        return view('delivery.stores.edit', compact('store'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\app_delivery_stores  $app_delivery_stores
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Update Store Info
        $storeData = request()->except(['_token','_method']);
        app_delivery_stores::where('id','=',$id)->update($storeData);
        $store = app_delivery_stores::findOrFail($id);
        return view('delivery.stores.edit', compact('store'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\app_delivery_stores  $app_delivery_stores
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Delete this item
        app_delivery_stores::destroy($id);
        return redirect('/delivery/stores');

    }
}
