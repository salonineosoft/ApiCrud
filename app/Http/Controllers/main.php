<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
//use DB;
class main extends Controller
{
    //Add post
    public function addPost(){
        return view('addpost');
    }

    //insert into database
    public function insertdb(Request $req)
    {
      DB::table('employees')->insert([
          'name'=>$req->name,//left->db colom name,right side->form input
          'lastname'=>$req->lastname,
          'department'=>$req->department,
          'location'=>$req->location


      ]);
      return redirect('show');
    }
  //show tables
    public function show()
    {
        $show = DB::table('employees')->get();//geting data from db
        return view('show',compact('show'));//array
    }
    //edit data
    public function edit($id)
    {
      $edit = DB::table('employees')->where('id',$id)->first();
      return view('edit',compact('edit'));
    }
    //update data
    public function update(Request $req)
    {
        DB::table('employees')->where('id',$req->id)->update([
          'name'=>$req->name,//left->db colom name,right side->form input
          'lastname'=>$req->lastname,
          'department'=>$req->department,
          'location'=>$req->location
        ]);
         return redirect('show');
    }
    //delete data
    public function delete($id)
    {
        DB::table('employees')->where('id',$id)->delete();
        return back()->with('delete','successfully deleted');
    }
    
}
