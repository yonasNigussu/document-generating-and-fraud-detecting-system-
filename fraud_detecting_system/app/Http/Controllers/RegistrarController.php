<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Request_list;
use App\Models\User;
use App\Models\Graduated_student_list;
use App\Models\Csstdudent;
use App\Models\Photo;

use App\Exports\StudentsExport;
use App\Imports\StudentsImport;
use App\Imports\AccountImport;
use App\Imports\GradeImport;
use Maatwebsite\Excel\Facades\Excel;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

use TCPDF;

class RegistrarController extends Controller
{
    public function request_list()
    {
        $list= Request_list::all();
        return view('registrar.request_list',compact('list'));
    }

    public function downloads()
    {
       return view('registrar.download'); 
    }

    public function addStudent()
    {
        $list = Request_list::get();
        $student = Graduated_student_list::get();
        return view('registrar.graduated_student', compact('student'),compact('list'));
    }

    public function addphoto()
    {
        $list = Request_list::get();
        $student = Photo::get();
        return view('registrar.showaddstudent', compact('student'),compact('list'));
    }

    public function addstudentgrade()
    {
        return view('registrar.addgrade');
    }

    public function physical_list()
    {
        $list = Request_list::get();
        return view('registrar.physicalcome',compact('list'));
    }
    public function physical_list_form(Request $request)
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

    

    public function upload_photo(Request $request)
{
    try {
    $photos = $request->file('file');

    foreach ($photos as $photo) {
        $list = new Photo;

        $originalName = $photo->getClientOriginalName();
        $photo->move('studentImage', $originalName);
        $list->image = $originalName;
        $list->save();
    }

    return redirect()->back()->with('message','Request submited Successfully');
}catch (\Exception $e) {
    return redirect()->back()->with('message1','there is error with photos name.it is duplicated in the list or the same name with stored image ');
}

}



    /*public function physical_document()
    {
        
        $request_type=$list->request_type;
        $request_tod='Orginal Degree';
        $request_tt='Temporary Certificate';
        $request_ts='Student Copy';
        $request_to='Official Transcript';
        $request_tl='To Whom It May Concern';


        $student= User::find($Uid);
        $accunt_name=$student->name;
        $graduate_id=$student->account_id;


        $graduated_student = Graduated_student_list::find($graduate_id);
        $gs=$graduated_student->first_name;
        $student_id=$graduated_student->account_id;

        $grade = Csstdudent::find($student_id);
        //$gradea=$grade->first_name;
        

        
        if($request_type==$request_tod||$request_type==$request_tt)
        {
        if($request_name==$accunt_name)
        {
            
            if($accunt_name==$gs)
            {
               return view('registrar.certificate',compact('graduated_student'));
                
            }
            else
            {
               // echo "did not graduate from dire dawa";
               
               return redirect()->back()->with('message','the user are not listed on the graduated student list');
            }
        }
        else
        {
           // echo "not the same";
           return redirect()->back()->with('message','the user ask for other student document');
        }
    }elseif($request_type==$request_to||$request_type==$request_ts)
    {
        if($request_name==$accunt_name)
        {
            
            if($accunt_name==$gs)
            {
                return view('registrar.transcript',compact('grade'));
                
            }
            else
            {
               // echo "did not graduate from dire dawa";
               
               return redirect()->back()->with('message','the user are not listed on the graduated student list');
            }
        }
        else
        {
           // echo "not the same";
           return redirect()->back()->with('message','the user ask for other student document');
        }
        
        //echo $graduate_id;
    }
    else{
        if($request_name==$accunt_name)
        {
            
            if($accunt_name==$gs)
            {
                echo "letter";
                
            }
            else
            {
               // echo "did not graduate from dire dawa";
               
               return redirect()->back()->with('message','the user are not listed on the graduated student list');
            }
        }
        else
        {
           // echo "not the same";
           return redirect()->back()->with('message','the user ask for other student document');
        }
        
    }
     
    

    }
*/
/*
    public function index()
    {
        $users = User::get();
  
        return view('users', compact('users'));
    }
*/

//excel import
   
        
    /**
    * @return \Illuminate\Support\Collection
    */
    public function export() 
    {
        return Excel::download(new StudentsExport, 'graduated_student.xlsx');
    }
       
    /**
    * @return \Illuminate\Support\Collection
    */
    public function import(Request $request) 
    {
        try {

            $value='computer_science';
            $department = $request->department;
            if($department==$value){
            Excel::import(new GradeImport,request()->file('file'));
        }
            Excel::import(new AccountImport,request()->file('file'));
            Excel::import(new StudentsImport,request()->file('file'));
           // Excel::import(new GradeImport,request()->file('file'));
           return redirect()->back()->with('message1','successfully submited');
        } catch (\Exception $e) {
            return redirect()->back()->with('message','there is un error on the excel part');
        }


       
    }

   /* public function importa(Request $request)
    {
        $sdepartment=$request->department;
        if($sdepartment="computer_science"){
        try {
        Excel::import(new GradeImport,request()->file('file'));
        return back();
    } catch (\Exception $e) {
        return redirect()->back()->withErrors(['error' => $e->getMessage()]);
    }
}else{
    echo "not correct";
}
    }*/
//excel import

    public function list_detail($id)
    {
        $list= Request_list::findOrFail($id);
        return view('registrar.detail',compact('list'));
      
    }

    public function clerk_detail($id)
    {
        $list= Request_list::findOrFail($id);
        return view('clerk.detail',compact('list'));
      
    }

    public function reject($id)
    {
        $list= Request_list::findOrFail($id);
        $list->status="Rejected";
        $list->save();
        return redirect()->back();


    }

    public function document($id)
    {
        $list= Request_list::find($id);
        //return view('registrar.detail',compact('list'));
        $request_name=$list->first_name;
        $request_lname=$list->last_name;
        $request_fname=$list->grand_father_name;
        $id_num=$list->id_number;
        $department=$list->department;
        $Uid=$list->user_id;
        $request_type=$list->request_type;
        $request_tod='Original Degree';
        $request_tt='Temporary Certificate';
        $request_ts='Student Copy';
        $request_to='Official Transcript';
        $request_tl='To Whom It May Concern';

        $cs='computer science';
        $it='information technology';


        $student= User::find($Uid);
        $accunt_name=$student->name;
        $accunt_lname=$student->last_name;
        $accunt_fname=$student->grand_father_name;
        $accunt_id=$student->id_number;
        $graduate_id=$student->account_id;


        
        //$gradea=$grade->first_name;
        
        if($Uid==1)
        {

            try {
                $graduated_student = Graduated_student_list::find($id_num);
            $gs=$graduated_student->first_name;
            $gs_last=$graduated_student->last_name;
            $gs_father=$graduated_student->grand_father_name;
            $student_id=$graduated_student->account_id;
            $grade = Csstdudent::find($student_id);
            } catch (\Exception $e) {
                return redirect()->back()->with('message','the user are not listed on the graduated student list');
            }

           
            //$photo = Photo::get();
            $grade = Csstdudent::find($student_id);
        $photo = Photo::where('image', $student_id)->first();
            

            if($request_type==$request_tod||$request_type==$request_tt)
            {
                if($request_name==$gs&&$request_lname==$gs_last&&$request_fname==$gs_father&&$id_num==$student_id)
                  {
                $url = url('/try', $student_id); // Replace 'certificate.show' with your certificate route name
                $qrCode = QrCode::size(200)->generate($url);
                        if($request_type==$request_tt){
                            $list->status="Accepted";
                            $list->save();
                         return view('registrar.degree',compact('graduated_student'),compact('photo', 'qrCode'));
                        }else{
                            $list->status="Accepted";
                            $list->save();
                            return view('registrar.originaldegree',compact('graduated_student'),compact('photo', 'qrCode'));
                        }
                  }
                  else{
                    return redirect()->back()->with('message','the student not listed on graduated student list');
                  }
            } 
            elseif($request_type==$request_to||$request_type==$request_ts)
            {
                if($request_name==$gs&&$request_lname==$gs_last&&$request_fname==$gs_father&&$id_num==$student_id)
                  {
                        if($request_type==$request_to){
                            $list->status="Accepted";
                            $list->save();
                            return view('registrar.transcript',compact('grade','graduated_student')); 
                        }else{
                            $list->status="Accepted";
                            $list->save();
                            return view('registrar.studentcopy',compact('grade','graduated_student')); 
                        } 
                  }else{
                    return redirect()->back()->with('message','the student not listed on graduated student list');
                  }
            }
            else{
                echo "letter";
            }
        }
        else
        {
            $graduated_student = Graduated_student_list::find($graduate_id);
        $gs=$graduated_student->first_name;
        $student_id=$graduated_student->account_id;

        $grade = Csstdudent::find($student_id);
        $photo = Photo::where('image', $student_id)->first();

        if($request_type==$request_tod||$request_type==$request_tt)
        {
        if($request_name==$accunt_name&&$request_lname==$accunt_lname&&$request_fname==$accunt_fname&&$id_num==$student_id)
        {
            
            if($accunt_name==$gs)
            {
                $url = url('/try', $graduate_id); // Replace 'certificate.show' with your certificate route name
                $qrCode = QrCode::size(200)->generate($url);
                    if($request_type==$request_tt){
                        $list->status="Accepted";
                            $list->save();
                        return view('registrar.degree',compact('graduated_student'),compact('photo', 'qrCode'));
                    }else{
                        $list->status="Accepted";
                            $list->save();
                        return view('registrar.originaldegree',compact('graduated_student'),compact('photo', 'qrCode'));
                    }
                
            }
            else
            {
               // echo "did not graduate from dire dawa";
               
               return redirect()->back()->with('message','the user are not listed on the graduated student list');
            }
        }
        else
        {
           // echo "not the same";
           return redirect()->back()->with('message','the user ask for other student document');
        }
    }elseif($request_type==$request_to||$request_type==$request_ts)
    {
        if($request_name==$accunt_name&&$request_lname==$accunt_lname&&$request_fname==$accunt_fname&&$id_num==$student_id)
        {
            
            if($accunt_name==$gs)
            {
                if($request_type==$request_to){
                    $list->status="Accepted";
                            $list->save();
                    return view('registrar.transcript',compact('grade','graduated_student')); 
                }else{
                    $list->status="Accepted";
                            $list->save();
                    return view('registrar.studentcopy',compact('grade','graduated_student')); 
                } 
            }
            else
            {
               // echo "did not graduate from dire dawa";
               
               return redirect()->back()->with('message','the user are not listed on the graduated student list');
            }
        }
        else
        {
           // echo "not the same";
           return redirect()->back()->with('message','the user ask for other student document');
        }
        
        //echo $graduate_id;
    }
    else{
        if($request_name==$accunt_name&&$request_lname==$accunt_lname&&$request_fname==$accunt_fname&&$id_num==$student_id)
        {
            
            
            if($accunt_name==$gs)
            {
                if($department==$cs)
            {
                $list->status="Accepted";
                            $list->save();
                $graduated_student = Graduated_student_list::find($graduate_id);
                return view('cs_school.letter',compact('graduated_student'));
                
            }elseif($department==$it){
                
            $graduated_student = Graduated_student_list::find($graduate_id);
            $list->status="Accepted";
                            $list->save();
                return view('it_school.letter',compact('graduated_student'));
            } 
            }
            else
            {
               // echo "did not graduate from dire dawa";
               
               return redirect()->back()->with('message','the user are not listed on the graduated student list');
            }
        }
        else
        {
           // echo "not the same";
           return redirect()->back()->with('message','the user ask for other student document');
        }
        
    }
     
    

    }
    
    }
}
