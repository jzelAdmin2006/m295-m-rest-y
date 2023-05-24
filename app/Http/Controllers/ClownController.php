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

    public function update(Request $request, $id)
    {
        $clown = Clown::find($id);
        $clown->fill($request->all());
        $clown->save();
        return $clown;
    }

    public function delete($id)
    {
        $clown = Clown::find($id);
        $clown->delete();
        return $clown;
    }
}
