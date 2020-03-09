<?php

namespace App\Http\Controllers;

use App\Phone;
use Illuminate\Http\Request;

class PhoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $phones = Phone::all();

        echo json_encode($phones);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $phone = new Phone();

        $phone->brand= $request->input('brand');
        $phone->model = $request->input('model');
        $phone->imei = $request->input('imei');
        $phone->number = $request->input('number');
        $phone->owner = $request->input('owner');
        $phone->company = $request->input('company');
        $phone->description = $request->input('description');
        $phone->state = $request->input('state');
        
        $phone->save();
       
        echo json_encode($phone);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $phone = Phone::find($id);
        $phone->brand =  $request->get('brand');
        $phone->model = $request->get('model');
        $phone->imei = $request->get('imei');
        $phone->number = $request->get('number');
        $phone->owner = $request->get('owner');
        $phone->company = $request->get('company');
        $phone->description = $request->input('description');
        $phone->state = $request->input('state');
        $phone->save();

        echo json_encode($phone);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $phone = Phone::find($id);
        $phone->delete();

        echo json_encode($phone);
    }
}
