<?php

namespace App\Http\Controllers;
use App\About;
use Illuminate\Http\Request;
use App\News;
class BrandaController extends Controller
{
    public function index(request $request){

        return view('index');
    }

    public function news($link){
        $halaman='News KPDP';
        $data=News::where('link',$link)->first();
        $kategori='News ';
        return view('news',compact('halaman','data','kategori'));
    }

    public function news_all(){
        $halaman='Semua Berita';
        return view('news_all',compact('halaman'));
    }

    public function about(request $request){
        $halaman='About KPDP';
        if($request->kategori==''){
            $kategori='sekilas';
        }else{
            $kategori=$request->kategori;
        }
        if($kategori=='visi'){
            $judul='Visi dan Misi';
        }else{
            $judul=$kategori;
        }
        $data=About::where('kategori',$kategori)->first();
        return view('about',compact('halaman','kategori','data','judul'));
    }
}
