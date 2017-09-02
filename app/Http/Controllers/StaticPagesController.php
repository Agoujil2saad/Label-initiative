<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
	public function  qui_sommes_nous()
	{
		return view('static_pages.qui_sommes_nous');
	}
  
}
