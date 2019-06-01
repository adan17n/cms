<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\blog;
use App\gambar;
use App\contact;

class FrontController extends Controller
{
    public function index(){
        return view('front.index');
    }
    public function blog(){
        $blog = blog::paginate(6);
        return view('front.blog',['blog' => $blog]);
    }
    public function detail($id){
        $blog = blog::find($id);
        return view('front.detail',['blog' => $blog]);
    }
    public function gambar(){
        $gambar = gambar::paginate(10);
        return view('front.gambar',['gambar' => $gambar]);
    }
    public function contact(){
        return view('front.contact');
    }
    public function contactKirim(Request $request){
       $contact = contact::create($request->all());
       return redirect('/contact');
    }
}
