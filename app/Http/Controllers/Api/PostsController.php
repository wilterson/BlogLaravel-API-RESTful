<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

class PostsController extends Controller
{

	use \App\Http\Controllers\ApiControllerTrait;

	protected $model;

	/**
	 * PostsController constructor.
	 */
	public function __construct(\App\Post $model) {

		$this->model = $model;
	}
}
