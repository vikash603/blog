<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Adbanner;

class AdbannerController extends Controller
{
    public function index()
    {
        $banner=Adbanner::get();


        return view('backend.adbanner.index', compact('banner'));
    }

    public function create()
    {
        return view('backend.adbanner.create');
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

if ($request->hasFile('image1')) {
 $imageName = rand(999,9999999).time().'.'.$request->image1->extension();  
        $request->image1->move(public_path('images'), $imageName);
$data['image1']=$imageName;
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

Adbanner::insert($data);
return redirect('/adbanner');


    }

    public function edit($id){
        $ad=Adbanner::where('id', '=', $id)->get();
        return view('backend.adbanner.edit', compact('ad'));
    }

    public function update(Request $request){
        $data=array(

        );

        if ($request->hasFile('image')) {
 $imageName = rand(999,9999999).time().'.'.$request->image->extension();  
        $request->image->move(public_path('images'), $imageName);
$data['image']=$imageName;
}

if ($request->hasFile('image1')) {
 $imageName = rand(999,9999999).time().'.'.$request->image1->extension();  
        $request->image1->move(public_path('images'), $imageName);
$data['image1']=$imageName;
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

Adbanner::where('id', '=', $request->id)->update($data);
return redirect('/adbanner');

    }



}
