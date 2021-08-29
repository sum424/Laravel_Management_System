<?php

namespace App\Http\Controllers;

use App\Http\Requests\DyeValidator;
use App\Models\Dye;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class DyeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dyes = Dye::all();

        return view('dye.index', compact('dyes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dye.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DyeValidator $request)
    {
        $request->validated();

        $dye = new Dye();
        $dye->Name = $request->input('Name');
        $dye->Brand = $request->input('Brand');
        $dye->Price = $request->input('Price');
        $dye->Quantity = $request->input('Quantity');
        $dye->created_at = $request->input('created_at');
        $dye->save();

        Alert::success('Dye', 'Added Successfully', 'Success!!')->autoClose(3000);
        return redirect('dye');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dye  $dye
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dye = Dye::find($id);
        return view('dye.show', compact('dye'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dye  $dye
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dye = Dye::find($id);
        return view('dye.edit', compact('dye'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dye  $dye
     * @return \Illuminate\Http\Response
     */
    public function update(DyeValidator $request, $id)
    {
        $request->validated();

        $dye = Dye::where('id', $id)->update([
            'Name' => $request->input('Name'),
            'Brand' => $request->input('Brand'),
            'Price' => $request->input('Price'),
            'Quantity' => $request->input('Quantity'),
            'updated_at' => $request->input('updated_at')
        ]);

        return redirect('dye');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dye  $dye
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dye $dye)
    {
        $dye->delete();

        Alert::error('Dye', 'Deleted Successfully', 'Success!!')->autoClose(3000);
        return redirect('dye');
    }
}
