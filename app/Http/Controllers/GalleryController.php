<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Category;
use App\Subcategory;
use App\Newstype;
use App\Gallery;
class GalleryController extends Controller
{

    public function index(){
        return view('backend.gallery.index');
    }




     public function gallery($id){
       
        $gallery=Gallery::where('news_id', '=', $id)->get();
        $data=News::where('id','=', $id)->get();
        return view('backend.news.gallery', compact('data','gallery'));
    }


     public function store(Request $request){
        $data=array(
            'news_id'=>$request->news_id,
           

        );

        if ($request->hasFile('gallery')) {
 $imageName = rand(999,9999999).time().'.'.$request->gallery->extension();  
        $request->gallery->move(public_path('gallery'), $imageName);
$data['gallery']=$imageName;
}

Gallery::insert($data);
        return redirect('/gallery');


    }


    
}
