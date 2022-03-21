<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;

class AboutController extends Controller
{
    public function index(){
        $about=About::get();
        return view('backend.about.index', compact('about'));
    }

    public function create(){
        return view ('backend.about.create');
    }

    public function store(Request $request){
        $data=array(
            'title'=>$request->title,
            'description'=>$request->description,
            'created_at' =>date('Y-m-d H:i:s'),
            'updated_at' =>date('Y-m-d H:i:s'),

        );
        About::insert($data);
        return redirect('/about/index');
    }

    public function edit($id){
        $about=About::where('id', '=', $id)->get();
        return view('backend.about.edit', compact('about'));
    }

    

    public function update(Request $request){
        $data=array(
            'title'=>$request->title,
            'description'=>$request->description,

        );
        About::where('id','=', $request->id)->update($data);
        return redirect('/about/index');
    }
}
