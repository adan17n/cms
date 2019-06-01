<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\gambar;
use File;

class BackController extends Controller
{
    public function home(){
        return view('back.index');
    }
    public function gambar(){
        $gambar = gambar::paginate(7);
        return view('back.gambar',['gambar' => $gambar]);
    }
    public function tambah()
    {
        return view('back.tambah');
    }
    public function store(Request $request){

        $gambar = gambar::create($request->all());
        if ($request->hasFile('gambar')) {
            $request->file('gambar')->move('image/',$request->file('gambar')->getClientOriginalName());
            $gambar->gambar = $request->file('gambar')->getClientOriginalName();
            $gambar->save();

        }
        return redirect('/dgambar');
    }
    public function delete($id){
        $gambar = gambar::find($id);
        File::delete('gambar/'.$gambar->gambar);

        $gambar->delete();
        return redirect('/dgambar');
    }

    public function adan()
{
    $adan = file_get_contents('http://127.0.0.1:8000/adan');
    $value = json_decode($adan, true);
    $value = $value["value"];





    return view('back.adan',['value' => $value]);
}
public function apishow($id){
    $adan = file_get_contents('http://127.0.0.1:8000/adan');
    $value = json_decode($adan, true);


    $value = $value["value"];
    $value = $value[$id];


    return view('back.adanShow',['value' => $value]);


}public function new(){
    return view('back.buat');
}


public function create(){

    $adan = file_get_contents('http://127.0.0.1:8000/adan/store');
    $value = json_decode($adan, true);



}
public function auto(){
    return view('back.auto');
}
}

