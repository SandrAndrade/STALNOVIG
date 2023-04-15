<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class EmpleadoController extends Controller{

    public function __construct()
    {
        $this->middleware('Refrescar');
    }

    protected $fillabe =['path'];

    public function index()
    {
        $datos['empleados'] = Empleado::paginate(7 );
        return view ('home',$datos );

    }

    public function create()
    {
        return view ('empleado.create ');
    }

    public function store(Request $request)
    {
        
        //$datosEmpleado = request()-> all();
        $datosEmpleado = request()->except('_token');
        
        if($request-> hasFile('Foto')){
            $datosEmpleado['Foto']=$request->file('Foto')->store('uploads','public');
        }


        // if($request ->hasFile('Foto')){
        //     $path = $request->image->store('uploads','public');
        //     Image::create(['path' => $path]);
        // }

        Empleado::insert ($datosEmpleado);
        //return  response()->json($datosEmpleado);
        return  redirect('empleado')->with ('mensaje','Cuarto agregado con exito ');




        
    }


    public function show(Empleado $empleado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $empleado=Empleado::findOrFail($id);
        return view ('empleado.edit', compact('empleado'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        //
        $datosEmpleado = request()->except(['_token', '_method']);
        
        if($request-> hasFile('Foto')){
            $empleado=Empleado::findOrFail($id);
            Storage::delete('public/'.$empleado->Foto);


            $datosEmpleado['Foto']=$request->file('Foto')->store('uploads','public');
        }  
        
        
        
        
        
        Empleado :: where('id', '=',$id)->update($datosEmpleado);

        $empleado=Empleado::findOrFail($id);
        return view ('empleado.edit', compact('empleado'                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            ));
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $empleado=Empleado::findOrFail($id);
        if(Storage::delete('public/'.$empleado->Foto)){
            Empleado::destroy($id);

        }


        return  redirect('empleado')->with('mensaje', 'Empleado borrado ');
    }

}
