<?php

namespace App\Http\Controllers;

use App\Models\formularioGeneral;
use Database\Seeders\UniversidadesSeeder;
use Illuminate\Http\Request;
use App\Models\universidades;
use function GuzzleHttp\Promise\all;

class PagesController extends Controller
{
    public function index(){
        return redirect("curso-semestral");
    }

    public function semestral(){
        $universidades = universidades::all();
        return view("pages.semestral", compact('universidades'));
        // return view("pages.semestral");
    }
    public function anual(){
        return view("pages.anual");
    }
    public function semi(){
        return view("pages.semi");
    }
     public function semestral_data(Request $request){
        $nombre = $request->input("form_name"); //para obtener el valor del input
        $edad = $request->input("form_edad");
        $wats = $request->input("form_num");
        $email = $request->input("form_email");
        $face = $request->input("form_face");
        $domicilio = $request->input("form_dom");
        $uni = $request->input("form_uni");
        $carrera = $request->input("form_carrera");
        $escuela = $request->input("form_escuela");
        $horario = $request->input("form_horario");
        $cuentanos = $request->input("form_cuentanos");
        $csdt = $request->input("form_csdt");
        $nombre_padre = $request->input("form_name_padre");
        $tel_padre = $request->input("form_tel_padre");
        $registro = $request->input("register");
        formularioGeneral::create($request->all());
     }
}
