<?php

namespace App\Http\Controllers;

use App\Models\Clown;

class ClownController extends Controller
{
    public function findAll()
    {
        return Clown::get();
    }
}
