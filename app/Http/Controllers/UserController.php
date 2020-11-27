<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;
use PDF;
class UserController extends Controller
{
    public function __construct()
    {
    //$this->middleware('auth');
    $this->middleware(function($request, $next){
        if(Gate::allows('manage-articles')) return $next($request);
        abort(403, 'Anda tidak memiliki cukup hak akses');
        });

    }
    public function manageuser(){
        $user = User::all();
        return view('manageuser',['user' => $user]);
    }
    public function add(){
        return view('adduser');
    }
    public function create(Request $request){
        if($request->file('image')){
            $image_name = $request->file('image')->store('images','public');
        }
        User::create([
        'id' => $request->id,
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make ($request->password),
        'roles' => $request->roles,
        'imageurl' => $image_name
    ]);
        return redirect('/manageuser');
    }
    public function edit($id){
        $user = User::find($id);
        return view('edituser',['user'=>$user]);
    }
    public function update($id, Request $request){
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make ($request->password);
        $user->roles = $request->roles;
        if($user->imageurl && 
        file_exists(storage_path('app/public/' . $user->imageurl)))
        {
            \Storage::delete('public/'.$user->imageurl);
        }
            $image_name = $request->file('image')->store('images', 'public');
            $user->imageurl = $image_name;

        $user->save();
        return redirect('/manageuser');
    }
        public function delete($id){
        $user = User::find($id);
        $user->delete();
        return redirect('/manageuser');
    }
    public function cetak_pdf(){
        $user = User::all();
        $pdf = PDF::loadview('users_pdf',['user'=>$user]);
        return $pdf->stream();
    }
}