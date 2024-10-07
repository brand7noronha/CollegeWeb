<?php

namespace App\Controllers;

class Site extends BaseController
{
	public function index()
	{
		// echo "<h1>Welcome!</h1>";
		return view('site/index');
	}

    public function aboutUs(){
		return view('site/aboutUs');
	}

    public function contactUs(){
        echo view('site/header');
        echo view('site/contactUs');
        echo view('site/footer');
    }

    public function dynamicValue(){
        $data
        $data=array('name'=>'brandon','address'=>'siolim','email'=>'brandon@gmail.com');

        return view('site/showdata',$data);
    }
}
