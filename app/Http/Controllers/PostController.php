<?php

namespace App\Http\Controllers;

use App\Models\Post; 
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $data = Post::all();
        return view('home',compact('data'));
    }

    public function create(){
        return view('tambahagenda');
    }
    

    public function store(Request $request) {
        $this->validate($request,[
            'name'=>'required',
            'mata_pelajaran'=>'required',
            'materi'=>'required',
            'jam_pelajaran'=>'required',
            'absen'=>'required',
            'kelas'=>'required',
            'pembelajaran'=>'required',
            'link'=>'required',
            'foto'=>'required',
            'keterangan'=>'required'
        ]);
        Post::create($request->all());
        return redirect('/agenda');
    }

    public function tampilan($id) {
        $data = post::find($id);
        return view('editagenda', compact('data'));
    }

    public function update(Request $request,$id) {
        $data = post::find($id);
        $data->update($request->all());
        return redirect('/agenda');
    }

    public function destroy($id) {
        $data = post::find($id);
        $data->delete();
        return redirect()->route('home');
    }
}
