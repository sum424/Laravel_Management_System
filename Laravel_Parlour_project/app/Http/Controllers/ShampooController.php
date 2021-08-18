<?php

namespace App\Http\Controllers;

use App\Http\Requests\ShampooValidator;
use App\Models\Shampoo;
use Illuminate\Http\Request;

class ShampooController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $shampoos = Shampoo::all();
        return view('shampoo.index', compact('shampoos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('shampoo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ShampooValidator $request)
    {
        $request->validated();

        $shampoo = new Shampoo;
        $shampoo->Name = $request->input('Name');
        $shampoo->Brand = $request->input('Brand');
        $shampoo->Price = $request->input('Price');
        $shampoo->Quantity = $request->input('Quantity');
        $shampoo->created_at = $request->input('created_at');
        $shampoo->save();

        return redirect('shampoo');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   $shampoo = Shampoo::findOrFail($id);
        return view('shampoo.show', compact('shampoo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $shampoo = Shampoo::find($id)->first();
        return view('shampoo.edit', compact('shampoo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ShampooValidator $request, $id)
    {
        $request->validated();

            $shampoo = Shampoo::where('id', $id)->update([
            'Name' => $request->input('Name'),
            'Brand' => $request->input('Brand'),
            'Price' => $request->input('Price'),
            'Quantity' => $request->input('Quantity'),
            'updated_at' => $request->input('updated_at')
        ]);

        return redirect('shampoo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
