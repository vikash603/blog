<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subcategory;
use App\Category;
use DataTables;

class SubcategoryController extends Controller
{
    public function index(Request $request)
    {
        if($request->ajax()){
            $subcategory=Subcategory::get();
            return datatables()->of($subcategory)->make(true);
        }
        return view('backend.subcategory.index');
    }

    public function create()
    {
         $category = Category::get();
        return view('backend.subcategory.create',compact('category'));
    }

    public function store(Request $request)
    {
        $data=array(
            'category_id'=>$request->category_id,
            'subcategory' =>$request->subcategory,
            'created_at' =>date('Y-m-d H:i:s'),
            'updated_at' =>date('Y-m-d H:i:s'),

        );

        subcategory::insert($data);
        return view ('backend.subcategory.index');
    }

    public function edit($id)
    {
         $category = Category::get();
        $data=Subcategory::where('id','=',$id)->get();
        //return $data;
        return view('backend.subcategory.edit',compact('data','category'));
    }

    public function show($id)
    {
        $data=Subcategory::where('id','=',$id)->get();
        return view('backend.subcategory.edit', compact('data'));
    }

    public function update(Request $request)
    {
        $data=array(
            'category_id' =>$request->category_id,
            'subcategory' =>$request->subcategory,

        );
        Subcategory::where('id', '=',$request->id)->update($data);
        return view('backend.subcategory.index');
    }

   public function destroy(Request $request,$id){
   
    Subcategory::find($id)->delete();
  
    return response()->json([
        'success' => 'Record deleted successfully!'
    ]);
}



     
}
