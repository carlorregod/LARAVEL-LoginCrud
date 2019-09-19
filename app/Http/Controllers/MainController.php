<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Para el logout
use Auth;
use Redirect;
//Llamando al modelo
use App\Agenda;


class MainController extends Controller
{

    public function __construct()
    {
    	$this->middleware('auth');
    }


    public function index(){
        $data = Agenda::paginate(5);
        return view('main/main', compact('data')); 
    }

    public function logout()
    {
    	//Salida del autentificador y retorno al login
    	Auth::logout();
    	return Redirect::to('/');

    }

    public function cargatabla(Request $request)
    {
        $data = Agenda::paginate(5);
        if ($request->ajax()) {
            return $data;
        }

    }

}
