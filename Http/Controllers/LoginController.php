<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tranniee;


class LoginController extends Controller
{
    public function index(){
        return view('form');
    }
    public function register(Request $ab){
        // return $ab->all();
        $a = new tranniee;
        $a-> email=$ab['email'];
        $a-> password=$ab['password'];
        $a->save();
        return redirect('/view');
    }
    public function view(){
        $a = tranniee::all();
        $data = compact('a');
        return view('view')->with($data);
    }
    //for edit
    public function edit($id){
    $a=tranniee::find($id);
    $da=compact('a');
    return view('edit')->with($da);
    }
    //for update
    public function update(Request $ab, $id){
    $a=tranniee::find($id);
    $a->email=$ab['email'];
    $a->update();
    //access view page
    return redirect('/view');
    }
    //delete
    public function delete($id){
    tranniee::find($id)->delete();
    return redirect()->back();
    }
    
    
}
