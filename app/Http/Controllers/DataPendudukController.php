<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataPendudukController extends Controller
{
    public function showData(){
        $data = DataPenduduk::all();
        return response()->json($data);
    }
}
