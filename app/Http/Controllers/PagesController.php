<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Motor;
use App\Models\Merk;

class PagesController extends Controller
{
    //
    public function index()
    {
        $motors = Motor::all();
        $merks = Merk::pluck('nama_merk','id_merk');
        return view('index',compact('motors','merks'));
    }

    public function merkAjax($id){
        if($id==0){
            $motors = Motor::all();
        }else{
            $motors = Motor::where('id_merk','=',$id)->get();
        }
        return $motors;
    }

}
