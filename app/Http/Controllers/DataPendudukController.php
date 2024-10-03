<?php

namespace App\Http\Controllers;

use App\Models\DataPenduduk;
use Illuminate\Http\Request;

class DataPendudukController extends Controller
{
    public function showData(){
        $data = DataPenduduk::all();
        return response()->json($data);
    }
}
