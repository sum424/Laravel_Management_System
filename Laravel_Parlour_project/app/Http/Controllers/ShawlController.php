<?php

namespace App\Http\Controllers;

use App\Http\Requests\ShawlValidator;
use App\Models\Shawl;
use Illuminate\Http\Request;

class ShawlController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shawls = Shawl::all();

        return view('shawl.index', compact('shawls'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('shawl.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ShawlValidator $request)
    {
        $request->validated();

        $shawl = new Shawl();
        $shawl->Name = $request->input('Name');
        $shawl->Brand = $request->input('Brand');
        $shawl->Price = $request->input('Price');
        $shawl->Quantity = $request->input('Quantity');
        $shawl->created_at = $request->input('created_at');
        $shawl->save();

        return redirect('shawl');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Shawl  $shawl
     * @return \Illuminate\Http\Response
     */
    //public function show(Shawl $id)
    /* no need to define name of model for fetching individual data */
    public function show($id)
    {   
        $shawl = Shawl::findOrFail($id);
        return view('shawl.show', compact('shawl'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Shawl  $shawl
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $shawl = Shawl::find($id);
        return view('shawl.edit', compact('shawl'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Shawl  $shawl
     * @return \Illuminate\Http\Response
     */
    public function update(ShawlValidator $request,$id)
    {
        $request->validated();

        $shawl = Shawl::where('id', $id)->update([
            'Name' => $request->input('Name'),
            'Brand' => $request->input('Brand'),
            'Price' => $request->input('Price'),
            'Quantity' => $request->input('Quantity'),
            'updated_at' => $request->input('updated_at')
        ]);

        return redirect('shawl');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Shawl  $shawl
     * @return \Illuminate\Http\Response
     */
    public function destroy(Shawl $shawl)
    {
        $shawl->delete();

        return redirect('shawl');
    }
}
