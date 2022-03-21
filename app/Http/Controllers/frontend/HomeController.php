<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Contact;
use App\Student;
use App\Mark;
use App\Logo;
use App\News;
use App\Gallery;
use App\Category;
use App\Subcategory;
use App\About;
use App\Tem;
use App\Adbanner;
use App\Newstype;
use App\Comment;
use Mail;
class HomeController extends Controller
{
    public function index()
    {
        $sub=Subcategory::with('sub')->get();
        $cat=Category::with('getnews')->get();
        $news=News::orderBy('id')->get();
        $adbanner=Adbanner::get();
        $newstype=Newstype::orderBy('id')->get();
        $comment=Comment::get();



        return view('frontend.index', compact('news','cat','sub','adbanner','newstype','comment'));

    }

    public function student()
    {
        $student=Student::orderBy('id')->get();
        return view('frontend.student', compact('student'));

    }

    public function view()
    {
        $stt=Mark::where('student_id','=','$id')->get();
        $mark=Mark::orderBy('id')->get();
        return view('frontend.view', compact('mark','stt'));
    }




    public function about()
    {

        
        $about=About::get();
        $tem=Tem::get();
        return view('frontend.about', compact('about','tem'));
    }





    public function contact()
    {
        return view('frontend.contact');
    }

   

public function store(Request $request){
     $request->validate([
    'name' => 'required',
    'email' => 'required|email',
    'phone' => ['required', 'digits:10'],
    'subject' => 'required',
    'message' => 'required',
]);
     $data=array(
        'name' =>$request->name,
        'phone'=>$request->phone,
        'email'=>$request->email,
        'subject' =>$request->subject,
        'message'=>$request->message,
        'created_at'=>date('Y-m-d H:i:s'),
        'updated_at'=>date('Y-m-d H:i:s'),
            );


     Contact::insert($data);


     Mail::send(' ', $data, function($message) use ($data) {
          $message->to($data['email'])
          ->subject($data['subject']);
        });


     return redirect('/contact');
}


    public function terms()
    {
        return view('frontend.terms');
    }

    public function news_details($slug){
        
        $News=News::where('slug','=', $slug)->first(); 
        $gallery=Gallery::where('news_id', '=', $News->id)->get();
        $comment=Comment::where('news_id', '=', $News->id)->get();
        
        return view('frontend.news-details',compact('News','gallery','comment'));
    }

    public function storr(Request $request){

          $request->validate([
    'name' => 'required',
    'email' => 'required|email',
    'description' => 'required',
]);

        $data=array(
            'name'=>$request->name,
            'email'=>$request->email,
            'description'=>$request->description,
            'news_id'=>$request->news_id,
            'created_at'=>date('Y-m-d H:i:s'),
              'updated_at'=>date('Y-m-d H:i:s'),
        );

        
        Comment::insert($data);
        return redirect('/');

    }

public function news_category(){
    return view('frontend.news-category');
}





   


}
