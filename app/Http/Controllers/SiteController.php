<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
public function home(){

return view('pages.home');
}

public function first(){

return view('pages.form');
}
}
