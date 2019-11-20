<?php

namespace App\Http\Controllers;

use App\Cargo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use Auth;
use DB;
use Storage;
use App\Persona;
use App\Tipouser;
use App\User;

class CargoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index1()
    {
        if (accesoUser([1, 2])) {
            $idtipouser = Auth::user()->tipouser_id;
            $tipouser = Tipouser::find($idtipouser);
            $modulo = "cargos";
            return view('cargo.index', compact('tipouser', 'modulo'));
        } else {
            return view('adminlte::home');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $buscar = $request->busca;
        $cargos = Cargo::where('borrado', '0')
            ->where(function ($query) use ($buscar) {
                $query->where('cargo', 'like', '%' . $buscar . '%');
            })
            ->orderBy('id', 'desc')
            ->paginate(10);
        return [
            'pagination' => [
                'total' => $cargos->total(),
                'current_page' => $cargos->currentPage(),
                'per_page' => $cargos->perPage(),
                'last_page' => $cargos->lastPage(),
                'from' => $cargos->firstItem(),
                'to' => $cargos->lastItem(),
            ],
            'cargos' => $cargos
        ];
    }
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cargo = $request->cargo;
        $activo = $request->activo;
        $borrado = 0;

        $result = '1';
        $msj = '';
        $selector = '';

        $input1  = array('cargo' => $cargo);
        $reglas1 = array('cargo' => 'required');


        $validator1 = Validator::make($input1, $reglas1);


        if ($validator1->fails()) {
            $result = '0';
            $msj = 'Ingrese el Cargo';
            $selector = 'txttitulo';
        } else {

            $newCargo = new Cargo();
            $newCargo->cargo = $cargo;
            $newCargo->activo = $activo;
            $newCargo->borrado = '0';
            $newCargo->save();
            $msj = 'Nueva Cargo Academico registrado con éxito';
        }

        return response()->json(["result" => $result, 'msj' => $msj, 'selector' => $selector]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cargo = $request->cargo;
        $borrado = 0;

        $result = '1';
        $msj = '';
        $selector = '';

        $input1  = array('cargo' => $cargo);
        $reglas1 = array('cargo' => 'required');


        $validator1 = Validator::make($input1, $reglas1);


        if ($validator1->fails()) {
            $result = '0';
            $msj = 'Ingrese el Nombre del cargo';
            $selector = 'txttitulo';
        } else {

            $newCargo = Cargo::findOrFail($id);
            $newCargo->cargo = $cargo;
            $newCargo->save();

            $msj = 'Nueva Cargo fue modificado con éxito';
        }
        return response()->json(["result" => $result, 'msj' => $msj, 'selector' => $selector]);
    }
    public function altabaja($id, $activo)
    {
        $result = '1';
        $msj = '';
        $selector = '';

        $update = Cargo::findOrFail($id);
        $update->activo = $activo;
        $update->save();

        if (strval($activo) == "0") {
            $msj = 'El Cargo fue Desactivada exitosamente';
        } elseif (strval($activo) == "1") {
            $msj = 'El Cargo fue Activada exitosamente';
        }

        return response()->json(["result" => $result, 'msj' => $msj, 'selector' => $selector]);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $result = '1';
        $msj = '1';


        $borrar = Cargo::findOrFail($id);
        //$task->delete();

        $borrar->borrado = '1';

        $borrar->save();

        $msj = 'Cargo Academico eliminado exitosamente';

        return response()->json(["result" => $result, 'msj' => $msj]);
    }
}
