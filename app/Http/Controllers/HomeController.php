<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use Auth;
use App\Category;
use App\Subcategory;
use DataTables;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

       public function logout()
    {
       Auth::logout();

         return redirect('/login');
    }


    public function index()
    {
        return view('home');
    }

    public function admin()
    {

        return view('backend.admin');
    }






    
}
