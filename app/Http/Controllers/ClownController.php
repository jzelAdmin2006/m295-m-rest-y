<?php

namespace App\Http\Controllers;

use App\Models\Clown;
use Illuminate\Http\Request;

class ClownController extends Controller
{
    public function findAll()
    {
        return Clown::get();
    }

    public function create(Request $request)
    {
        $clown = new Clown();
        $clown->fill($request->all());
        $clown->save();
        return $clown;
    }
}
