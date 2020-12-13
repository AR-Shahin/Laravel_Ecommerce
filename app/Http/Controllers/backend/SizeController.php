<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Size;
use Illuminate\Http\Request;
use function redirect;
use function ucwords;

class SizeController extends Controller
{
    public function index(){
        $this->data['sizes'] = Size::latest()->get();
        return view('backend.size.index',$this->data);
    }

    public function store(Request $request){
        $request->validate([
            'name' => ['required','unique:sizes'],
        ]);

        $size = new Size();
        $size->name = ucwords($request->name);
        if($size->save()){
            return redirect()->back()->with('toast_success','New Size Added! ['.$request->name.']');
        }
    }

    public function update(Request $request,$id){
        $size = Size::find($id)->update([
            'name' => ucwords($request->name),
        ]);
        if($size){
            return redirect()->back()->with('toast_success','Size name Updated! ['.$request->name.']');
        }
    }

    public function delete(Request $request){
        $del = Size::find($request->id)->delete();
        if($del){
            return redirect()->back();
        }
    }
}
