<?php

namespace peninsula\Http\Controllers;

use Illuminate\Http\Request;

use peninsula\Http\Requests;
use peninsula\Http\Controllers\Controller;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
      $users = \peninsula\User::select('nombre', 
                        'apellido', 
                        'tipo_ci', 
                        'number_ci', 
                        'genero', 
                        'fecha_nacimiento', 
                        'email', 
                        'telf_casa', 
                        'telf_movil',
                        'telf_trabajo',   
                        'profesion',
                        'habitantes_casa',
                        'tipo_usuario',
                        'lugar_edificio',
                        'lugar_apartamento')
            //->with('edad')
            ->where('tipo_ci', '<>', 'extranjero')
            ->orderby('id', 'ASC')
            ->distinct('genero')
            ->get();
      
      return dd($users->toArray());
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
