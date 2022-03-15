<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class pageController extends Controller
{

    public function detalle($id){
        $frasco=App\models\frasco::findOrFail($id);
        return view('frascos.detalle',compact('frasco'));
    }
    public function index(){
        $frascos=App\models\frasco::all();
        return view('welcome',compact('frascos'));
    }
    public function inicio(){
        return view('cattleya');
    }
    public function perfumes(){
        return view('perfumes');
    }


    public function nosotros($nombre=null){
        
    $equipo = ['Juan','Katerine','Gloria'];

    // return view('nosotros',['equipo'=>$equipo]);
    return view ('nosotros', compact('equipo','nombre')); 
    }
}
