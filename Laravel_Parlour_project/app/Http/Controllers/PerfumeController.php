<?php

namespace App\Http\Controllers;

use App\Http\Requests\PerfumeValidator;
use App\Models\Perfume;
use Illuminate\Http\Request;

class PerfumeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $perfumes = Perfume::all();
        return view('perfume.index', compact('perfumes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('perfume.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PerfumeValidator $request)
    {
        $request->validated();

        $perfume = new Perfume();
        $perfume->Name = $request->input('Name');
        $perfume->Brand = $request->input('Brand');
        $perfume->Price = $request->input('Price');
        $perfume->Quantity = $request->input('Quantity');
        $perfume->created_at = $request->input('created_at');
        $perfume->save();

        return redirect('perfume');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Perfume  $perfume
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $perfume = Perfume::findOrFail($id);
        return view('perfume.show', compact('perfume'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Perfume  $perfume
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $perfume = Perfume::find($id);
        return view('perfume.edit', compact('perfume'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Perfume  $perfume
     * @return \Illuminate\Http\Response
     */
    public function update(PerfumeValidator $request, $id)
    {
        $request->validated();

        $perfume = Perfume::where('id', $id)->update([
            'Name' => $request->input('Name'),
            'Brand' => $request->input('Brand'),
            'Price' => $request->input('Price'),
            'Quantity' => $request->input('Quantity'),
            'updated_at' => $request->input('updated_at')
        ]);

        return redirect('perfume');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Perfume  $perfume
     * @return \Illuminate\Http\Response
     */
    public function destroy(Perfume $perfume)
    {
        //
    }
}
