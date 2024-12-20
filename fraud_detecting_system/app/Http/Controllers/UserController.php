<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Request_list;
use App\Models\Feedback;
use App\Models\User;
use App\Models\Graduated_student_list;

class UserController extends Controller
{
    public function service_list()
    {
       return view('user.services'); 
    }
    public function form($id)
    {
        $ida=auth()->user()->id;
        $list_u=User::find($ida);
        $account_id=$list_u->account_id;
        $list=Graduated_student_list::find($account_id);
        return view('user.form',compact('id','list'));
    }
    
    public function letter_form()
    {
        $ida=auth()->user()->id;
        $list_u=User::find($ida);
        $account_id=$list_u->account_id;
        $list=Graduated_student_list::find($account_id);
        return view('user.letter_form',compact('list'));
    }
    public function list(Request $request)
    {
        $list=new Request_list;

        $list->first_name=$request->fname;
        $list->last_name=$request->lname;
        $list->grand_father_name=$request->gfname;
        $list->id_number=$request->id;
        $list->gender=$request->gender;
        $list->request_type=$request->request_type;
        $list->email=$request->email;
        $list->mobile_number=$request->phone;
        $list->year_of_graduation=$request->year;
        $list->admission_type=$request->admission_type;
        $list->degree_type=$request->degree_type;
        $list->college=$request->school;
        $list->department=$request->department;
        $list->transaction_number=$request->bankNumber;
        $list->address_of_institution=$request->insAddress;
        $list->name_of_institution=$request->insName;
        $list->user_id=$request->user_id;
        

        $receipt=$request->receipt;
        $receiptpic=time().'.'.$receipt->getClientoriginalExtension();
        $request->receipt->move('receiptImage',$receiptpic);
        $list->receipt=$receiptpic;

        $costSharing=$request->cost;
        $costpic=time().'.'.$costSharing->getClientoriginalExtension();
        $request->cost->move('costImage',$costpic);
        $list->cost_sharing_letter=$costpic;
        
        $list->save();
        return redirect()->back()->with('message','Request submited Successfully');

    } 

    public function letter_list(Request $request)
    {
        $list=new Request_list;

        $list->first_name=$request->fname;
        $list->last_name=$request->lname;
        $list->grand_father_name=$request->gfname;
        $list->id_number=$request->id;
        $list->gender=$request->gender;
        $list->request_type=$request->request_type;
        $list->email=$request->email;
        $list->mobile_number=$request->phone;
        $list->year_of_graduation=$request->year;
        $list->admission_type=$request->admission_type;
        $list->degree_type=$request->degree_type;
        $list->college=$request->school;
        $list->department=$request->department;
        $list->transaction_number=$request->bankNumber;
        $list->address_of_institution=$request->insAddress;
        $list->name_of_institution=$request->insName;
        $list->user_id=$request->user_id;
        

        $receipt=$request->receipt;
        

        $costSharing=$request->cost;
        
        $list->save();
        return redirect()->back()->with('message','Request submited Successfully');

    } 

   public function feed_back(Request $request)
   {
        $text= new Feedback;
        $text->title=$request->title;
        $text->text=$request->text;
        $name_id=$request->user_id;

        $user=User::find($name_id);
        $fname=$user->name;
        $lname=$user->last_name;
        $gfname=$user->grand_father_name;
        $id_number=$user->id_number;

        $text->first_name=$fname;
        $text->last_name=$lname;
        $text->grand_father_name=$gfname;
        $text->id_number=$id_number;

        $text->save();
        return redirect()->back()->with('message','feedback submited Successfully');
        
   }

    public function trauck_requiest($id)
    {
        $list = Request_list::all();
        $filteredRows = [];
    
        foreach ($list as $row) {
            if ($row->user_id == $id) {
                $filteredRows[] = $row;
            }
        }
    
        return view('user.trackrequest', compact('filteredRows'));
    }
    
    
}
