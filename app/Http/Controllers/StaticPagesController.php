<?php

namespace App\Http\Controllers;

class StaticPagesController extends Controller
{
	public function qui_sommes_nous()
	{
		return view('static_pages.qui_sommes_nous');
	}
  
}
