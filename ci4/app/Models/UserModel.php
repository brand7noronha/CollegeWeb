<?php
namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model{

    public function checkMVC(){
        return $this->db->query("SELECT * FROM users")->getResult();
    }
}