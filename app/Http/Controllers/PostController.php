<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PostController extends Controller
{
    public function create(){
        return view('posts.create');
    }

    public function store(Request $request){
        // dd($request->all());
        $request->validate([
            'judul'=>'required|unique:pertanyaans',
            'isi'=>'required'
        ]);

        $query = DB::table('pertanyaans')->insert([
            "judul"=>$request["judul"],
            "isi"=>$request["isi"]
        ]);
        return redirect('/posts')->with('success','pertanyaan berhasil di post');
    }

    public function index(){
        $pertanyaans = DB::table('pertanyaans')->get();//select *
        // dd($posts);
        return view('posts.index',compact('pertanyaans'));
    }

    public function show($id){
        $pertanyaan =DB::table('pertanyaans')->where('id',$id)->first();
        // dd($pertanyaan);
        return view('posts.show',compact('pertanyaan'));
    }

    public function edit($id){
        $pertanyaan = DB::table('pertanyaans')->where('id',$id)->first();
        // dd($pertanyaan);
        return view('posts.edit',compact('pertanyaan'));
    }

    public function update($id, Request $request){


        $query = DB::table('pertanyaans')
                    ->where('id',$id)
                    ->update([
                        'judul'=>$request['judul'],
                        'isi' => $request['isi']
                    ]);
        return redirect('/posts')->with('success','berhasil edit');
    }

    public function destroy($id){
        $query=DB::table('pertanyaans')
                    ->where('id',$id)
                    ->delete();
        return redirect('/posts')->with('success','berhasil dihapus');
    }
}
