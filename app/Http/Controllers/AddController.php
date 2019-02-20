<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\add_users;
use DB;

class AddController extends Controller
{
    public function add_view()
    {
        return view('index/add');
    }

    public function add_user(Request $req)
    {
        $model = new add_users;

        $data = $model->add_users();

        dd($data);
    }
}
