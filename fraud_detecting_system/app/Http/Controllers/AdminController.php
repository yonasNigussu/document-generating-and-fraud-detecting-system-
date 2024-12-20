<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Post;

class AdminController extends Controller
{
    public function account()
    {
        $list= User::all();
        return view('admin.account',compact('list'));
    }

    // public function account()
    // {
    //     $list= User::all();
    //     return view('admin.request_list',compact('list'));
    // }

    

public function store(Request $request)
{
    $validator = $request->validate([
        'name' => 'required|string',
        'last_name' => 'required|string',
        'grand_father_name' => 'required|string',
        'id_number' => ['required', 'integer', 'unique:users', 'regex:/^[0-9]{7}$/'],
        'email' => 'required|email',
        'password' => ['required', 'confirmed', 'min:8', 'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/'],
    ]);

    
    User::create([
        'usertype' => $request->input('2'),
        'name' => $request->input('name'),
        'last_name' => $request->input('last_name'),
        'grand_father_name' => $request->input('grand_father_name'),
        'email' => $request->input('email'),
        'id_number' => 'DDU' . $request->input('id_number'),
        'account_id' => $request->input('id_number'),
        'password' => Hash::make($request->input('password')),
    ]);

    return redirect()->back()->with('status', 'User added successfully');
}

    public function edit($id) 
    {
        $list= User::find($id);
        return response()->json([
            'status'=>200,
            'user'=>$list,
        ]);

    }

    public function update(Request $request)
    {
       $id = $request->id;
       $name = $request->input('name');
       $email = $request->input('email');
       $address = $request->input('address');

       $isupdatesuccess = User::where('id',$id)->update(['name'=>$name,
        'email'=>$email,'address'=>$address]);
       if($isupdatesuccess)
        return redirect()->back()->with('message','Request submited Successfully');
       else
        return redirect()->back()->with('message','Request is unsuccessful');

    }
    public function profile($id)
    {
        $list= User::where('id',$id)->get();
        return view('admin.profile', ['list'=>$list]);
    }

    public function updatePassword(Request $request, $id)
{
    $list = User::findOrFail($id);
    
     $request->validate([
        'new_password' => ['required', 'confirmed', 'min:8', 'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/'],
     ]);
        $list->password = Hash::make($request->new_password);
        $list->save();
        if($list->save()){

        return redirect()->back()->with('success', 'Password updated successfully.');
    } else {
        return redirect()->back()->with('fail', 'Password is not strong, so it was not updated successfully.');
    }
}

    public function destroy(Request $request,$id)
    {
        //$user_id = $request->input('delete_user_id');
        $list= User::find($id);
        $list->acc_status="2";
        $list->save();
        return redirect()->back()->with('status', 'User blocked successfully');
    }
    public function unblock($id)
    {
        //$user_id = $request->input('delete_user_id');
        $list= User::find($id);
        $list->acc_status="1";
        $list->save();
        return redirect()->back()->with('status', 'User unblocked successfully');
    }
    public function reset(Request $request,$id)
    {
        //$user_id = $request->input('delete_user_id');
        $list= User::find($id);
        $list->password=Hash::make('12345678');
        $list->password_changed="0";
        $list->save();
        return redirect()->back()->with('status', 'User reseted successfully');
    }

    public function post()
    {
        $id='1';
        $list= Post::find($id);
        return view('admin.post',compact('list'));
    }

    public function update_post(Request $request)
    {
        $id='1';
        $list= Post::find($id);

        $post=$request->file;
        $postpic=time().'.'.$post->getClientoriginalExtension();
        $request->file->move('postImage',$postpic);
        $list->image=$postpic;

        $list->text=$request->text;
        $list->title=$request->title;
        $list->save();
        return redirect()->back()->with('message','news post Successfully');

    }

}