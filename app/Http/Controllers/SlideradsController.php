<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sliderads;

class SlideradsController extends Controller
{
    public function index(){
        $slider=Sliderads::get();
        
        return view('backend.sliderads.index', compact('slider'));
    }

    public function create(){
        return view ('backend.sliderads.create');
    }

    public function store(Request $request){
        $data=array(
         
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'),

        );
          if ($request->hasFile('image')) {
 $imageName = rand(999,9999999).time().'.'.$request->image->extension();  
        $request->image->move(public_path('images'), $imageName);
$data['image']=$imageName;
}


          Sliderads::insert($data);
        return redirect('/sliderads');
    }


    public function edit($id){
        $slider=Sliderads::where('id', '=', $id)->get();
        return view('backend.sliderads.edit', compact('slider'));

    }

    public function update(Request $request){
        $data=array(

        );
        if ($request->hasFile('image')) {
 $imageName = rand(999,9999999).time().'.'.$request->image->extension();  
        $request->image->move(public_path('images'), $imageName);
$data['image']=$imageName;
}

Sliderads::where('id', '=', $request->id)->update($data);
return redirect('/sliderads');
    }

    public function delete($id){
        Sliderads::where('id', '=', $id)->delete($id);
        return redirect('/sliderads');
    }










   
}
