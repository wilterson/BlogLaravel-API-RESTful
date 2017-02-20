<?php
/**
 * Created by PhpStorm.
 * User: Wilterson Garcia
 * Date: 18/02/2017
 * Time: 06:16
 */

namespace App\Http\Controllers;

use \Illuminate\Http\Request;

trait ApiControllerTrait
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index( Request $request ) {

		// Set limit
		$limit = isset( $request->all()['limit'] ) ? $request->all()['limit'] : 20;

		//Set order
		$order = isset( $request->all()['order'] ) ? $request->all()['order'] : NULL;

		if ( $order !== NULL ) {
			$order = explode( ',', $order );
		}

		//Valor padrão order
		$order[0] = isset( $order[0] ) ? $order[0] : 'id';
		$order[1] = isset( $order[1] ) ? $order[1] : 'asc';


		$result = $this->model->orderBy( $order[0], $order[1] )
		                   ->paginate( $limit );

		return response()->json( $result );
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request $request
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function store( Request $request ) {

		$result = $this->model->create($request->all());

		return response()->json($result);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int $id
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function show( $id ) {
		$result = $this->model->findOrFail($id);
		return response()->json($result);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int $id
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function edit( $id ) {
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request $request
	 * @param  int $id
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function update( Request $request, $id ) {
		$result = $this->model->findOrFail($id);
		$result->update($request->all());

		return response()->json($result);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int $id
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function destroy( $id ) {
		$result = $this->model->findOrFail($id);
		$result->delete();

		return response()->json($result);
	}
}