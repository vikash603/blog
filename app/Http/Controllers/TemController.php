<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tem;
use DataTables;


class TemController extends Controller
{
    public function index(Request $request)
    {

         if ($request->ajax()) {
            $tem = Tem::get();
            return datatables()->of($tem)->make(true);
        }

        return view('backend.tem.index');
    }

    public function create()
    {
        return view('backend.tem.create');
    }




   public function store(Request $request){
     $data=array(
        'name' =>$request->name,
        'designation' =>$request->designation,
        'facebook' =>$request->facebook,
        'instagram' =>$request->instagram,
        'twitter' =>$request->twitter,
        'linkedin' =>$request->linkedin,
        'created_at'=>date('Y-m-d H:i:s'),
        'updated_at'=>date('Y-m-d H:i:s'),
            );

      if ($request->hasFile('image')) {
 $imageName = rand(999,9999999).time().'.'.$request->image->extension();  
        $request->image->move(public_path('images'), $imageName);
$data['image']=$imageName;
}

     Tem::insert($data);
     return redirect('/tem');
}



 public function edit($id)
    {
        $data=Tem::where('id','=',$id)->get();

        return view('backend.tem.edit', compact('data'));

    }

     public function show($id)
    {
        $data=Tem::where('id','=',$id)->get();

        return view('backend.tem.edit', compact('data'));

    }

    public function update(Request $request)
    {

        $data=array(
           
           'name' =>$request->name,
        'designation' =>$request->designation,
        'facebook' =>$request->facebook,
        'instagram' =>$request->instagram,
        'twitter' =>$request->twitter,
        'linkedin' =>$request->linkedin,
        );

        if ($request->hasFile('image')) {
 $imageName = rand(999,9999999).time().'.'.$request->image->extension();  
        $request->image->move(public_path('images'), $imageName);
$data['image']=$imageName;
}

        Tem::where('id', '=',$request->id)->update($data);

        return view('backend.tem.index');

    }

    public function destroy(Request $request,$id){
   
    Tem::find($id)->delete();
  
    return response()->json([
        'success' => 'Record deleted successfully!'
    ]);
}


}
