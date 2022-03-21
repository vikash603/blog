<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Newstype;
use DataTables;


class NewstypeController extends Controller
{
    public function index(Request $request)
    {

         if ($request->ajax()) {
            $newstype = Newstype::get();
            return datatables()->of($newstype)->make(true);
        }

        return view('backend.newstype.index');
    }

    public function create()
    {
        return view('backend.newstype.create');
    }




   public function store(Request $request){
     $data=array(
        'newstype' =>$request->newstype,

        'created_at'=>date('Y-m-d H:i:s'),
        'updated_at'=>date('Y-m-d H:i:s'),
            );

      

     newstype::insert($data);
     return view('backend.newstype.index');
}



 public function edit($id)
    {
        $data=Newstype::where('id','=',$id)->get();

        return view('backend.newstype.edit', compact('data'));

    }

     public function show($id)
    {
        $data=Newstype::where('id','=',$id)->get();

        return view('backend.newstype.edit', compact('data'));

    }

    public function update(Request $request)
    {

        $data=array(
           
            'newstype'=>$request->newstype,
            
           

        );

        Newstype::where('id', '=',$request->id)->update($data);

        return view('backend.newstype.index');

    }

    public function destroy(Request $request,$id){
   
    Newstype::find($id)->delete();
  
    return response()->json([
        'success' => 'Record deleted successfully!'
    ]);
}


}
