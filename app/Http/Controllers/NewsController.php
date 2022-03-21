<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Category;
use App\Subcategory;
use App\Newstype;
use App\Gallery;

class NewsController extends Controller
{
    public function index(Request $request)
    {

         if ($request->ajax()) {
            $news = News::get();
            return datatables()->of($news)->make(true);
        }

        return view('backend.news.index');
    }

    public function create()
    {
        $category=Category::orderBy('id')->get();
        $subcategory=Subcategory::orderBy('id')->get();
        $newstype=Newstype::orderBy('id')->get();

        return view('backend.news.create',compact('category','subcategory','newstype'));
    }

    public function store(Request $request){
        $data=array(
            'category' => $request->category,
            'subcategory' => $request->subcategory,
            'author' => $request->author,
            'newstype' => $request->newstype,
            'tags' => $request->tags,
            'alt' => $request->alt,
            'slug' => $request->slug,
            'title' => $request->title,
            'youtube' => $request->youtube,
            'description' => $request->description,
            
            'created_at' =>date('Y-m-d H:i:s'),
            'updated_at' =>date('Y-m-d H:i:s'),

        );
         if ($request->hasFile('image')) {
 $imageName = rand(999,9999999).time().'.'.$request->image->extension();  
        $request->image->move(public_path('images'), $imageName);
$data['image']=$imageName;
}



News::insert($data);
return redirect('/news');

    }




        public function storer(Request $request){
        $data=array(
            'news_id'=>$request->news_id,
            

        );

        if ($request->hasFile('gallery')) {
 $imageName = rand(999,9999999).time().'.'.$request->gallery->extension();  
        $request->gallery->move(public_path('images'), $imageName);
$data['gallery']=$imageName;
}

Gallery::insert($data);
return redirect('/news/gallery/'.$request->news_id);

    }






    public function gallery($id){
       
        $gallery=Gallery::where('news_id', '=', $id)->get();
        $data=News::where('id','=', $id)->get();
        return view('backend.news.gallery', compact('data','gallery'));
    }




    public function edit($id){
        $category=Category::get();
        $subcategory=Subcategory::get();
        $newstype=Newstype::get();
        $data=News::where('id','=', $id)->get();
        return view('backend.news.edit', compact('data','category','subcategory','newstype'));
    }

     public function show($id){
        $category=Category::get();
        $subcategory=Subcategory::get();
        $newstype=Newstype::get();
        $data=News::where('id','=', $id)->get();
        return view('backend.news.edit', compact('data','category','subcategory','newstype'));
    }




    public function update(Request $request)
    {
        $data=array(
            'category' =>$request->category,
            'subcategory' =>$request->subcategory,
            'author' =>$request->author,
            'newstype' =>$request->newstype,
            'tags' =>$request->tags,
            'alt' =>$request->alt,
            'slug' =>$request->slug,
            'title' =>$request->title,
            'youtube' =>$request->youtube,
            'description' =>$request->description,
        );
        if ($request->hasFile('image')) {
 $imageName = rand(999,9999999).time().'.'.$request->image->extension();  
        $request->image->move(public_path('images'), $imageName);
$data['image']=$imageName;
}
        News::where('id', '=', $request->id)->update($data);

        return view('backend.news.index');
    }


    public function delete($id)
    {
        Gallery::where('id','=',$id)->delete();

        return redirect('/news');

    }

   
    
}
