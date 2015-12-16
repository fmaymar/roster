<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


use Illuminate\Support\Facades\Request;
use App\Entities\User;

class UsersController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$users=User::OrderBy('created_at','desc')->paginate(7);
		//dd($users);
		//return view('admin.index', compact('users'));
		/*$users=DB::SELECT(DB::raw("SELECT sign,callsign,squadron,state
                                   FROM squadrons,profiles, user_states
                                   WHERE squadrons.id=profiles.squadron_id
                                   and profiles.user_state_id=user_states.id
                                   ORDER BY profiles.created_at"));
		dd($users);*/
		/*$profiles=DB::table('profiles')
				->join('squadrons','profiles.squadron_id','=','squadrons.id')
				->join('user_states','profiles.user_state_id','=','user_states.id')
				->select('sign','callsign','squadron','state')
				->OrderBy('profiles.created_at','desc')
				->paginate(10);*/

		return view('admin.users.index', compact('users'));


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
		//
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
