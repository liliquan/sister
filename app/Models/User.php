<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class user extends Model
{
    protected $table = 'users';
    protected $fillable = ['username','password'];
    
    public function dologin($user)
    {
        return DB::table('users')->where('username','=',$user)->first();
    }   
}

