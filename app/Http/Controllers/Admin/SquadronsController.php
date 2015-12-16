<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\SquadronFormRequest;

use Illuminate\Http\Request;

use App\Entities\Squadron;

class SquadronsController extends Controller {

	/**
	 * Muestra el listado de escuadrones existentes
	 */
	public function index()
	{
		$squadrons=Squadron::OrderBy('id','asc')->paginate(5);
		return view('admin.squadrons.index', compact('squadrons'));
	}


	/**
	 * Muestra el formulario para crear un escuadrón nuevo
	 */
	public function create()
	{
		return view('admin.squadrons.create');
	}


	/**
	 * Almacena los datos del formulario de creación en la base de datos
	 */
	public function store(SquadronFormRequest $request)
	{
		$squadron=new Squadron(array(
			'squadron'=>$request->get('squadron'),
				'logo'=>'sqd.png'));

		$squadron->save();

		return \Redirect::route('admin.squadrons.index')->with('message','El escuadrón ha sido creado');
	}


	/**
	 * Muestra un registro concreto
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Muestra el formulario para editar un escuadrón
	 */
	public function edit($id)
	{
		$squadron=Squadron::findOrFail($id);
		return view('admin.squadrons.edit', compact('squadron'));
	}


	/**
	 * Actualiza el escuadrón editado en la base de datos
	 */
	public function update(SquadronFormRequest $request, $id)
	{
        $squadron=Squadron::findOrFail($id);

        //Renombra la imagen recibida y la mueve al directorio adecuado
        $logoName=$squadron->logo;
        if(!empty($request->file('logo'))) {
            echo 'hola';
            $logoName = $id . '.' . $request->file('logo')->getClientOriginalExtension();
            $request->file('logo')->move(base_path() . '/public/images/squadrons', $logoName);
        }

        //Rellena la variable escuadrón con los registros del formulario y la manda a la BD
        $squadron->fill(array(
            'squadron'=>$request->get('squadron'),
            'country'=>$request->get('country'),
            'logo'=>$logoName,
            'description'=>$request->get('description'),
            'internal_description'=>$request->get('internal_description'),
            'obs'=>$request->get('obs')));

        $squadron->save();
        return redirect()->back()->with('message','Escuadrón actualizado correctamente');
	}

	/**
	 * Elimina un registro de la base de datos
	 */
	public function destroy($id)
	{
        $squadron=Squadron::findOrFail($id);
        $squadron->delete();
        return redirect()->route('admin.squadrons.index')->with('message','El Escuadrón ha sido eliminado');
	}

}
