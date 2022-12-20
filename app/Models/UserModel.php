<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table            = 'users';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['id', 'username', 'email', 'password'];

    function isEmailRegistered($email) {
        $builder = $this->table("users");
        $data = $builder->select('email')->where('email', $email)->first();
        
        if($data == null) {
            return true;
        } 
        
        return false;
    }

}
