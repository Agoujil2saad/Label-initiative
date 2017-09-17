<?php

namespace App\Http\Controllers;

class StaticPagesController extends Controller
{
	public function qui_sommes_nous()
	{
		return view('static_pages.qui_sommes_nous');
	}
	public function contact()
	{
		return view('static_pages.contact');
	}
  	public function team()
	{
		return view('static_pages.equipe');
	}
	public function guide_porteur()
	{
		return view('static_pages.guide_porteur');
	}
}
