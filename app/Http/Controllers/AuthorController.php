<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    //
    public function show($id){
        $author = User::find($id);
        if ($author->role->name == "Cliente"){
            return back();
        }else{
            return view('author.index')->with(compact('author'));
        }
    }
}
