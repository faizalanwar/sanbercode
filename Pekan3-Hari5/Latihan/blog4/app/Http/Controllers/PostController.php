<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class PostController extends Controller
{
    public function index () {
       $posts = DB::table('post')->get();
    // dd($posts);
        return view('posts.post',compact('posts'));
       
    }
    public function create () {
        return view('posts.create');
    }
    public function store (Request $Request) {
        
        // dd($Request->all());
        $Request->validate([
            'Title' => 'required|max:255',
            'Body' => 'required',
        ]);

        DB::table('post')->insert([
            'Title' => $Request["Title"],
            'Body' => $Request["Body"]
        ]);
        return redirect('post')->with('success','Data Berhasil Ditambah');;
    }

    public function show ($id){
        $posts = DB::table('post')->where('id',$id)->first();
        // dd($posts);
        return view ('posts.show',compact('posts'));
    }
    public function edit ($id){
        $posts = DB::table('post')->where('id',$id)->first();
        // dd($posts);
        return view ('posts.edit',compact('posts'));
    }

    public function update ($id,  Request $Request) {
        
        // dd($Request->all());
        $Request->validate([
            'Title' => 'required|max:255',
            'Body' => 'required',
        ]);

        DB::table('post')
            ->where('id',$id)
            ->update([
            'Title' => $Request["Title"],
            'Body' => $Request["Body"]
        ]);
        return redirect('post')->with('success','Data Berhasil Diubah');;
    }
    public function destroy ($id) {
        
       
        DB::table('post')
            ->where('id',$id)
            ->delete();
        return redirect('post')->with('success','Data Berhasil Dihapus');;
    }
}
