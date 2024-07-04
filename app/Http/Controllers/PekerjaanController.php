<?php

namespace App\Http\Controllers;

use App\Models\Pekerjaan;
use Illuminate\Http\Request;

class PekerjaanController extends Controller
{
    // get pekerjaan
    public function getAll(){
        $data = Pekerjaan::all();
        return response()->json([
            'data' => $data,
        ]);
    }
}
