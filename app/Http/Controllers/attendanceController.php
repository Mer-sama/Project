<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class attendanceController extends Controller
{
    //

     public function index(){
    return view('index');
    }

     public function dashboard(){
    return view('dashboard');
    }

     public function studentlist(){
       $user = DB::select("SELECT * from studentstatus");
                return view('studentlist',['user' => $user]);
    }


     public function studrecords(){
    return view('studrecords');
    }

    public function deletestudent($id){
         DB::delete("DELETE FROM studentstatus WHERE Student_ID =?",[$id]);
       $user = DB::select("SELECT * from studentstatus");
                return view('studentlist',['user' => $user]);
    }


    public function insertstudent(Request $request){
          $studID = $request->input('studID');
          $studname = $request->input('studname');
          $Status = $request->input('Status');
          $studdate = $request->input('studdate');
        

          $user = DB::insert("INSERT INTO studentstatus(Student_ID,Name,Status,studdate) VALUES(?,?,?,?)",[$studID,$studname,$Status,$studdate]);
                  $user = DB::select("SELECT * from studentstatus");
                return view('dashboard',['user' => $user]);

                                                        }




}
