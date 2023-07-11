<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use md5;
use Session;
use Illuminate\Support\Facades\Auth;
class StudentController extends Controller
{
    public function studentlogin(){
        return view('studentlogin');

    }

    public function studentloginPost(Request $request){
        
        $request->validate([
          'username' =>'required',
          'password'=>'required'

        ]);

        $student = Student::where('id','=',$request->username)->first();
       
        if($student){

            if(md5(($request->password) ===  $student->password)){
                     $request->session()->put('loginId', $student->id);
                     return redirect('s_home');
            }
            else{
                return back()->with('error', 'This mail failed');
            }
        }
        else{
              return back()->with('error', 'This mail failed');
        }
    }
    public function home(){
           $data = array();
           if(Session::has('loginID')){
            $student = Student::where('id','=',Session::get('loginID'))->first();
        return view('s_home', compact('student'));
           }
}
   

}
