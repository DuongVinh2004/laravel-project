<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgeController extends Controller
{
    public function show()
    {
        return view('age');
    }

    public function store(Request $request)
    {
        session(['age' => $request->input('age')]);
        return redirect()->route('restricted');
    }
}
