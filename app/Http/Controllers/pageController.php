<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class pageController extends Controller
{
    public function delete($id){
        $frasco=App\models\Frasco::findOrFail($id);
        $frasco->delete();

        return back()->with('mensaje','Frasco eliminado con exito!');
    }
    
    public function crearFrascos(Request $request){
        //return $request -> all();}
        
        $request->validate([

            'Id'=> 'required',
            'Precio'=> 'required',
            'Color'=> 'required',
            'ML'=> 'required',
            'Descripcion'=> 'required'
        ]);

        $frasco = new App\models\Frasco; 
        $frasco->Id = $request->Id;
        $frasco->Precio = $request->Precio;
        $frasco->Color = $request->Color;
        $frasco->ML = $request->ML;
        $frasco->Descripcion = $request->Descripcion;

        $frasco->save();
        return back()->with('mensaje','Frasco agregado con exito!');

    }

    public function editar($id){
        $frasco=App\models\Frasco::findOrFail($id);
        return view('frascos.editar',compact('frasco'));
    }
    
    public function update(Request $request,$id){
        $frasco=App\models\Frasco::findOrFail($id);
        $frasco->Id=$request->Id;
        $frasco->Precio=$request->Precio;
        $frasco->Color=$request->Color;
        $frasco->ML=$request->ML;
        $frasco->Descripcion=$request->Descripcion;

        $frasco->save();

        return back()->with('mensaje','frasco actualizado'); 

    }

    public function detalle($id){
        $frasco=App\models\frasco::findOrFail($id);
        return view('frascos.detalle',compact('frasco'));
    }
    public function index(){
        $frascos=App\models\frasco::simplePaginate(5);
        return view('welcome',compact('frascos'));
    }
    public function cattleya(){
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
