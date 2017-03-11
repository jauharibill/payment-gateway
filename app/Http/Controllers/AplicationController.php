<?php

namespace App\Http\Controllers;

use App\Aplication;
use Illuminate\Http\Request;

class AplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return $this->view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'description' => 'required|string',
            'user_id' => 'required|integer',
            ]);
        if ($validator->passes()) {
            Aplication::create($request->all());
            return response()->json('success');
        }
        return response()->json('failed');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Aplication  $aplication
     * @return \Illuminate\Http\Response
     */
    public function show(Aplication $aplication)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Aplication  $aplication
     * @return \Illuminate\Http\Response
     */
    public function edit(Aplication $aplication)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Aplication  $aplication
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Aplication $aplication)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Aplication  $aplication
     * @return \Illuminate\Http\Response
     */
    public function destroy(Aplication $aplication)
    {
        //
    }
}
