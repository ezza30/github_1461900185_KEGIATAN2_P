<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class controllerezza extends Controller
{
    public function anggota()
    {
        $anggota = DB::table('anggota')->get();
        return view('anggota0185',['anggota' => $anggota]);
    }
}
