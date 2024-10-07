<?php

namespace App\Controllers;

use App\Models\UserModel;

class User extends BaseController
{
	public function _construct()
	{
		$db=db_connect();
        $this->userModel=new UserModel($db);
	}

    // check the MVC working
    public function testMVC(){
        $result= $this->userModel->checkMVC();
        $data['results']=$result;
        $data['msg']="Hi! Welcome to the new world!";
        echo view('testViewMVC',$data);
    }
}
