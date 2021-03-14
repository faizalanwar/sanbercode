<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class PertanyaanController extends Controller
{
    public function index () {
        $pertanyaan = DB::table('pertanyaan')->get();
     // dd($posts);
         return view('pertanyaan.index',compact('pertanyaan'));
        
     }
     public function create () {
         return view('pertanyaan.create');
     }
     public function store (Request $Request) {
         
        //  dd($Request->all());
         $Request->validate([
             'Judul' => 'required|max:255',
             'Isi' => 'required',
         ]);
         $n = DB::table('pertanyaan')->max('id');
         DB::table('pertanyaan')->insert([

             'judul' => $Request["Judul"],
             'isi' => $Request["Isi"],
             'id' => $n+1,
         ]);
         return redirect('pertanyaan')->with('success','Data Berhasil Ditambah');;
     }
 
     public function show ($id){
         $pertanyaan = DB::table('pertanyaan')->where('id',$id)->first();
         // dd($posts);
         return view ('pertanyaan.show',compact('pertanyaan'));
     }
     public function edit ($id){
         $pertanyaan = DB::table('pertanyaan')->where('id',$id)->first();
         // dd($posts);
         return view ('pertanyaan.edit',compact('pertanyaan'));
     }
 
     public function update ($id,  Request $Request) {
         
         // dd($Request->all());
         $Request->validate([
             'judul' => 'required|max:255',
             'isi' => 'required',
         ]);
 
         DB::table('pertanyaan')
             ->where('id',$id)
             ->update([
             'judul' => $Request["judul"],
             'isi' => $Request["isi"],
         
         ]);
         return redirect('pertanyaan')->with('success','Data Berhasil Diubah');;
     }
     public function destroy ($id) {
         
        
         DB::table('pertanyaan')
             ->where('id',$id)
             ->delete();
         return redirect('pertanyaan')->with('success','Data Berhasil Dihapus');;
     }
}
