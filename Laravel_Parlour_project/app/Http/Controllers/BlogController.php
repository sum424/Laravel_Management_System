<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function form()
    {
        return view('form');
    }
    
    public function blogPost(Request $req)
    {
        $this->alert()->success('Data Successfully updated')->persistent('close')->autoclose(3000);
        return back();

    }
}
