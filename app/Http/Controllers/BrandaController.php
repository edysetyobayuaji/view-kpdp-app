<?php

namespace App\Http\Controllers;
use App\About;
use Illuminate\Http\Request;

class BrandaController extends Controller
{
    public function index(request $request){

        return view('index');
    }
    public function about(request $request){
        $halaman='About KPDP';
        if($request->kategori==''){
            $kategori='sekilas';
        }else{
            $kategori=$request->kategori;
        }
        $data=About::where('kategori',$kategori)->first();
        return view('about',compact('halaman','kategori','data'));
    }
}
