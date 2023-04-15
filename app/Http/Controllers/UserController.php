<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;


class UserController extends Controller{

    public function __construct()
    {
        $this->middleware('Refrescar');
    }


    public function index()
    {
        $datos['empleados']= Empleado::paginate(10);
        return view ('vista3',$datos);
    }

    public function show(empleado $Empleados){
        return view ('vista6',['empleado'=>$Empleados]);
        
    }
}
