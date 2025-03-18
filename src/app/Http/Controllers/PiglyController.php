<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PiglyController extends Controller
{
    public function weight_logs()
  {
    return view('weight_logs');
  }

    public function register_step1()
  {
    return view('register_step1');
  }

    public function register_step2()
  {
    return view('register_step2');
  }

    public function login()
  {
    return view('login');
  }

    public function weight_logs_update()
  {
    return view('weight_logs_update');
  }

    public function weight_logs_goalsetting()
  {
    return view('weight_logs_goalsetting');
  }
}
