<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Graduated_student_list;
use App\Models\Request_list;
use App\Models\Photo;
use App\Models\feedback;
use App\Models\Post;


class HomeController extends Controller
{
  public function redirect()
  {
    if(Auth::id())
    {
        if(Auth::user()->usertype=='0')
        {
            return view('user.home');
            
        }
        else if(Auth::user()->usertype=='1')
        {
          $list = Request_list::get();
          return view('registrar.home',compact('list'));
        }
        else if(Auth::user()->usertype=='2')
        {
          return view('cs_school.home');
        }
        else if(Auth::user()->usertype=='3')
        {
          return view('it_school.home');
        }
        else if(Auth::user()->usertype=='4')
        {
          $feedback=Feedback::all();
          return view('admin.home',compact('feedback'));
        }
        else if(Auth::user()->usertype=='6')
        {
          return view('clerk.home');
        }
        else if(Auth::user()->usertype=='7')
        {
          return view('clerk.home');
        }
        else
        {
          return redirect()->back();
        }
    }
    else
    {
        return redirect()->back();
    }
  }
  public function index()
  {
    $list= Post::all();
    return view('home.home',compact('list'));
  }  
  public function auth()
  {
    return view('home.authentication');
  }

  public function authenticated(Request $request)
    {
        $user = Auth::User();
        //dd($user->password_changed == false);
        if ($user->password_changed == false) {
                //dd('333');
            return redirect()->route('password.change');
        }
        //  
         //dd('433');
        return redirect()->route('/home/actor');
    }

  public function try($id)
  {
    $graduated_student = Graduated_student_list::find($id);
    $student_id=$graduated_student->account_id;
    
        $photo = Photo::where('image', $student_id)->first();
        
    return view('home.authDocTry', compact('graduated_student','photo'));
  }

  public function auth_id(Request $request)
{
  try{
    $graduate_id = $request->input('account_ida');
    $graduated_student = Graduated_student_list::find($graduate_id);
    $student_id=$graduated_student->account_id;
   
    $photo = Photo::where('image', $student_id)->first();
     if (!$photo) {
            return redirect()->back()->with('message', 'No photo found for this student');
        }
    return view('home.authDoc', compact('graduated_student'),compact('photo'));
}catch (\Exception $e) {
    return redirect()->back()->with('message', 'An error occurred. Please try again.');
}
}


}
