<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Teather1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {         
        // dd('teacher1.index');
        //
        return view('teacher1.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        dd();
        // $data="select * from table";
        // return view('teacher1.create')->with('data',$data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $data="select * from table where `id` = '$id'";
        return view('teacher1.edit')->with('data',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
