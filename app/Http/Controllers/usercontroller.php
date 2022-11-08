<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use DB;

class usercontroller extends Controller
{
    public function index()
    {
        return view('page1');
    }
    public function userStore(Request $req){
      $req->validate(
        [
            'name' => 'required|unique:users',
        ]
      );
        $post = new User;
        $post->name = $req->name;
        $post->fname = $req->fname;
        $post->age = $req->age;
        $post->gender = $req->gender;
        $post->imagename = $req->imagename->getClientoriginalName();
        $req->imagename->move(public_path('public/images'), $post->imagename);
        $post->save();
        return redirect('page2')->with('success','Successfully insert data in form');
    }

    public function show(){
        $data = User::all();
        return view('page2',['members'=>$data]);
    }
    public function edit($id){
       $post= User::find($id);
       return view('edit')->with('users',$post);
    }
}
