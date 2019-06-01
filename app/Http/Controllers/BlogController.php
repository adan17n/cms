<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\blog;
use Illuminate\Support\Facades\Auth;
use File;
use App\gambar;
use App\contact;

class BlogController extends Controller
{
    public function index(Request $request){
        if ($request->has('search')) {
            $blog = blog::where('judul', 'LIKE', '%'.$request->search.'%')->get();
        }else{

            $blog = blog::paginate(7);
        }
        return view('blog.index',['blog' => $blog]);

    }
    public function tambah(){
        return view('blog.tambah');
    }
    public function keluar(){
        Auth::logout();
        return redirect('/login');
    }
    public function create(Request $request){

        $this->validate($request,[
            'judul' => 'required|min:2',
            'pendahuluan' => 'required|min:2',
            'isi' => 'required|min:5',
            'penutup' => 'required',
            'penulis' => 'required',
            'gambar' => 'mimes:jpg,jpeg,png'
        ]);
        $blog = blog::create($request->all());
        if ($request->hasFile('gambar')) {
            $request->file('gambar')->move('image/',$request->file('gambar')->getClientOriginalName());
            $blog->gambar = $request->file('gambar')->getClientOriginalName();
            $blog->save();

        }
        return redirect('/dblog');
    }

public function edit($id){
    $blog = blog::find($id);

    return view('blog.edit',['blog' => $blog]);
}
public function update(Request $request,$id){
    $this->validate($request,[
        'judul' => 'required|min:2',
        'pendahuluan' => 'required|min:2',
        'isi' => 'required|min:5',
        'penutup' => 'required',
        'penulis' => 'required',
        'gambar' => 'mimes:jpg,jpeg,png'
    ]);
    $this->validate($request,[
        'judul' => 'required',
        'pendahuluan' => 'required',
        'isi' => 'required',
        'penutup' => 'required',
        'penulis' => 'required',
        'gambar' => 'mimes:jpg,jpeg,png'
    ]);
    $blog = blog::find($id);
    $blog->update($request->all());
    if ($request->hasFile('gambar')) {
        $request->file('gambar')->move('image/',$request->file('gambar')->getClientOriginalName());
        $blog->gambar = $request->file('gambar')->getClientOriginalName();
        $blog->save();

    }
    return redirect('/dblog')->with('sukses','Data Berhasil Ditambah');

}














    public function delete($id){
        $blog = blog::find($id);
        File::delete('gambar/'.$blog->gambar);

        $blog->delete();
        return redirect('/dblog');
    }

    public function cari(Request $request){
        $cari = $request->search;
        $blog = blog::where('judul','like',"%'.$cari.'%")->get();
        return view('blog.index',['blog' => $blog]);
    }
    public function inbox(){
        $contact = contact::all();
        return view('layouts.BackMaster',['contact' => $contact]);
    }
}
