<?php

namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model
{
    protected $table = 'login';
    protected $primaryKey = 'username';
    protected $allowedFields = ['username', 'password'];


    public function periksa($data)
    {
        return $this->where(['username' => $data['username'], 'password' => $data['password']])->first();
    }
}
