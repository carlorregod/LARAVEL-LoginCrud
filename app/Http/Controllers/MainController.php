<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Para el logout
use Auth;
use Redirect;


class MainController extends Controller
{

    public function __construct()
    {
    	$this->middleware('auth');
    }


    public function index(){
        return view('main/main'); 
    }

    public function logout()
    {
    	//Salida del autentificador y retorno al login
    	Auth::logout();
    	return Redirect::to('/');

    }

}
