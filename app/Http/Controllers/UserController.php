<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;

class UserController extends Controller
{
     public function index(Request $request)
    {

         if ($request->ajax()) {
            $data = Users::get();
            return datatables()->of($data)->make(true);
        }

        return view('backend.user.index');
    }
}
