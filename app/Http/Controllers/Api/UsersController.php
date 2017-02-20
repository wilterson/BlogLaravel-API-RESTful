<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

class UsersController extends Controller
{

	use \App\Http\Controllers\ApiControllerTrait;

	protected $model;

	/**
	 * UsersController constructor.
	 */
	public function __construct(\App\User $model) {

		$this->model = $model;
	}
}
