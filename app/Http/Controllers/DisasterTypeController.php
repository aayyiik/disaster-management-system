<?php

namespace App\Http\Controllers;

use App\Models\DisasterType;
use Illuminate\Http\Request;

class DisasterTypeController extends Controller
{
    public function index(){
        $kategori = DisasterType::all();
        return view ('kategori.index',['kategori'=>$kategori]);
    }

    public function create(Request $request){
        $this->validate($request,[
            'jenis_kategori' => 'required|min:1|max:50',
        ]);
    //  dd($request->all());
        DisasterType::create($request->all());
        return redirect ('/disaster-type'); 
    }

    public function edit($id){
        $kategori = DisasterType::find($id);
        return view ('kategori.edit',['kategori'=>$kategori]);
    }

    public function update(Request $request, $id){
 
        $kategori = DisasterType::find($id);
        $kategori->update($request->all());
        return redirect ('/disaster-type');
        
    }

    public function delete ($id){
        $kategori = DisasterType::find($id);
        $kategori->delete($kategori);
        return redirect('/disaster-type');
    }
}
