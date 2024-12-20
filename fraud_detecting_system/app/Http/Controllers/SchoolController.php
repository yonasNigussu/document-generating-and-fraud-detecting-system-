<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Request_list;

class SchoolController extends Controller
{
    //
    public function request_list_school()
    {
        $list= Request_list::all();
        return view('cs_school.request_list',compact('list'));
    }

    public function list_detailcs($id)
    {
        $list= Request_list::findOrFail($id);
        return view('cs_school.detail',compact('list'));
      
    }

    public function request_list_school_it()
    {
        $list= Request_list::all();
        return view('it_school.request_list',compact('list'));
    }

    public function request_list_clerk()
    {
        $list= Request_list::all();
        return view('clerk.request_list',compact('list'));
    }

    public function list_detailit($id)
    {
        $list= Request_list::findOrFail($id);
        return view('it_school.detail',compact('list'));

    }

    public function payment_denied($id)
    {
        $list= Request_list::findOrFail($id);
        $list->payment="denied";
        $list->status="Rejected";
        $list->save();
        return redirect()->back()->with('message','request denied successfully');


    }

    public function payment_approved($id)
    {
        $list= Request_list::findOrFail($id);
        $list->payment="approved";
        $list->save();
        return redirect()->back()->with('message2','request approved successfully');


    }

}
