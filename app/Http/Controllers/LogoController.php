<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Logo;

class LogoController extends Controller
{
    public function index(){
        $logo=Logo::get();
        
        return view('backend.logo.index', compact('logo'));
    }

    public function create(){
        return view ('backend.logo.create');
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

if ($request->hasFile('image2')) {
 $imageName = rand(999,9999999).time().'.'.$request->image2->extension();  
        $request->image2->move(public_path('images'), $imageName);
$data['image2']=$imageName;
}

if ($request->hasFile('image3')) {
 $imageName = rand(999,9999999).time().'.'.$request->image3->extension();  
        $request->image3->move(public_path('images'), $imageName);
$data['image3']=$imageName;
}
          Logo::insert($data);
        return redirect('/logo');
    }


    public function edit($id){
        $logo=Logo::where('id', '=', $id)->get();
        return view('backend.logo.edit', compact('logo'));

    }

    public function update(Request $request){
        $data=array(

        );
        if ($request->hasFile('image')) {
 $imageName = rand(999,9999999).time().'.'.$request->image->extension();  
        $request->image->move(public_path('images'), $imageName);
$data['image']=$imageName;
}

if ($request->hasFile('image2')) {
 $imageName = rand(999,9999999).time().'.'.$request->image2->extension();  
        $request->image2->move(public_path('images'), $imageName);
$data['image2']=$imageName;
}

if ($request->hasFile('image3')) {
 $imageName = rand(999,9999999).time().'.'.$request->image3->extension();  
        $request->image3->move(public_path('images'), $imageName);
$data['image3']=$imageName;
}
Logo::where('id', '=', $request->id)->update($data);
return redirect('/logo');
    }










   
}
