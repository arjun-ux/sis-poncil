<?php

namespace App\Http\Controllers;

use App\Models\Pendidikan;
use Illuminate\Http\Request;

class PendidikanController extends Controller
{
    // get all
    public function getAll(){
        $data = Pendidikan::all();
        return response()->json(['data' => $data,]);
    }
}
