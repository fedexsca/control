<?php

namespace Agnt86\Control;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ControlController extends Controller
{

  public function index(){
    return view('control::control.index');
  }

}
