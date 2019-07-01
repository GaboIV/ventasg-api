<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\ApiController;
use App\Unidad;
use Illuminate\Http\Request;

class unidadController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $modeloUnidad = new Unidad();

        if (request()->has('orden')) {
            $attribute = request()->orden; 
            $nombreCols = \Schema::hasColumn($modeloUnidad->getTable(), $attribute);
            if ( !$nombreCols ) $attribute = 'descripcion';
        } else {
            $attribute = 'descripcion_pl';
        }

        $almacenes = Unidad::orderBy($attribute)
                        ->paginate(30);

        $data = array(
            'orden' => $attribute,
            'data' => $almacenes
        ); 

        return $this->successResponse($data, 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
