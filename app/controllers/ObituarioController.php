<?php

class ObituarioController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
    {    
        $mensaje=null;
        $ObituarioArray = obituario::all();          
        return View::make('admin', array('mensaje'=>$mensaje))->with ('ObituarioArray',$ObituarioArray);    
    }
    
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
    {
        $datos=obituario::find($id);
        $datos->nombre = Input::get('nombre');
        $datos->panteon = Input::get('panteon');
        $datos->iglesia = Input::get('iglesia');
        $datos->iglesia2 = Input::get('iglesia2');
        $datos->domicilioiglesia = Input::get('domicilioiglesia');
        $datos->domicilioiglesia2 = Input::get('domicilioiglesia2');
        $datos->observaciones = Input::get('observaciones');
        $datos->estatus = Input::get('estatus');
        $datos->fallecimiento = Input::get('fallecimiento');
        $datos->cremacion = Input::get('cremacion');
        $datos->horacremacion = Input::get('horacremacion');
        $datos->salidadeservicio = Input::get('salidadeservicio');
        $datos->salidadeservicio2 = Input::get('salidadeservicio2');
        $datos->horaservicio = Input::get('horaservicio');
        $datos->horaservicio2 = Input::get('horaservicio2');
        $datos->fechafuneral = Input::get('fechafuneral');
        $datos->cementerio = Input::get('cementerio');
        $datos->diaservicio = Input::get('diaservicio');
        $datos->diaservicio2 = Input::get('diaservicio2');
        $datos->save();

        $mensaje= '<div class="panel panel-blue"><div class="panel-heading">Capilla actualizada correctamente</div></div>';
        $ObituarioArray = obituario::all();
        return View::make('admin', array('mensaje'=>$mensaje))->with ('ObituarioArray',$ObituarioArray);


    }


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
