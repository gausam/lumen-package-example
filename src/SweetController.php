<?php namespace Ihatehandles\Sweet;

use App\Http\Controllers\Controller;
use Laravel\Lumen\Routing\Controller as BaseController;

class SweetController extends BaseController {

  /**
  * Display a listing of the resource.
  *
  * @return Response
  */
  public function index()
  {
    return view('sweet::home');
  }
}