<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		// echo "<h1>Welcome!</h1>";
		return view('welcome_message');
	}

	public function myfunction(){
		echo "<h1>Hi this computer is unique!</h1>";
	}
}
