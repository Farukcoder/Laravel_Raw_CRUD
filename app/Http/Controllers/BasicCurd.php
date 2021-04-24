<?php

namespace App\Http\Controllers;

use Dotenv\Result\Success;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BasicCurd extends Controller
{
    function OnSelect(){
      $jsondata= DB::select('select * from student where name=?',['talha']);
      $jsonstring = json_encode($jsondata);
      $data = json_decode($jsonstring);

      return  view('select',['selectdata'=>$data]);

    }
    function OnInsert(Request $req){
        $name = $req->input('name');
        $class = $req->input('class');
        $roll = $req->input('roll');
        $section = $req->input('section');

       $result = DB::insert('INSERT INTO student(`name`, `class`, `roll`,`section`) VALUES (?,?,?,?)',[$name,$class,$roll,$section]);
       if($result == true){
         return "Success";
       }else{
         return "fail";
       }
    }
    function OnDelete(Request $req){
        $id = $req->input('id');

        $result= DB::delete('DELETE FROM `student` WHERE id = ?',[$id]);

        if($result== true){
          return "success";
        }else{
          return "error";
        }
    }
    function OnUpdate(Request $req){
      $name = $req->input('name');
      $class = $req->input('class');
      $roll = $req->input('roll');
      $section = $req->input('section');
      $id = $req->input('id');

     $result = DB::update('UPDATE `student` SET `class`=?,`roll`=?,`name`=?,`section`=? WHERE id=?',[$class,$roll,$name,$section,$id]);

     if($result==true){
       return "success";
     }else{
       return "error";
     }
    }
}
