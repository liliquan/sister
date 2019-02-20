<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class add_users extends Model
{
    protected $table = 'add_users';
    protected $fillable = ['name','tel','money','card'];
 
    public function add_users()
    {
        $user = DB::table('add_users')->insert([
            'name'=>$_POST['name'],
            'tel'=>$_POST['tel'],
            'money'=>$_POST['money'],
            'card'=>$_POST['card'],
        ]);

        return $user;
    }
}
