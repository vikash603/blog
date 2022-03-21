<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use DataTables;


class CategoryController extends Controller
{
    public function index(Request $request)
    {

         if ($request->ajax()) {
            $category = Category::get();
            return datatables()->of($category)->make(true);
        }

        return view('backend.category.index');
    }

    public function create()
    {
        return view('backend.category.create');
    }




   public function store(Request $request){
     $data=array(
        'category' =>$request->category,

        'created_at'=>date('Y-m-d H:i:s'),
        'updated_at'=>date('Y-m-d H:i:s'),
            );

      

     Category::insert($data);
     return view('backend.category.index');
}



 public function edit($id)
    {
        $data=Category::where('id','=',$id)->get();

        return view('backend.category.edit', compact('data'));

    }

     public function show($id)
    {
        $data=Category::where('id','=',$id)->get();

        return view('backend.category.edit', compact('data'));

    }

    public function update(Request $request)
    {

        $data=array(
           
            'category'=>$request->category,
            
           

        );

        Category::where('id', '=',$request->id)->update($data);

        return view('backend.category.index');

    }

    public function destroy(Request $request,$id){
   
    Category::find($id)->delete();
  
    return response()->json([
        'success' => 'Record deleted successfully!'
    ]);
}


}
