<?php

namespace App\Http\Controllers;

use App\User;
use File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function show($id){
        $user = User::find($id);
        return view('general.porfile')->with(compact('user'));
    }

    public function update(Request $request, $id)
    {
        //
        $user = User::find($id);
        $user->username = $request->input('username');
        $user->name = $request->input('name');
        $user->first_name = $request->input('first_name');
        $user->last_name = $request->input('last_name');
        $user->age = $request->input('age');
        $user->gender = $request->input('gender');
        $user->email = $request->input('email');


        $user->address->street = $request->input('street');
        $user->address->outdoor_number = $request->input('outdoor_number');
        $user->address->interior_number = $request->input('interior_number');
        $user->address->colony = $request->input('colony');
        $user->address->city = $request->input('city');
        $user->address->post_code = $request->input('post_code');
        $user->address->cellphone = $request->input('cellphone');
        $user->address->phone = $request->input('phone');

        if ($request->input('password') != null){
            $user->password = bcrypt($request->input('password')) ;
        }

        if ($request->hasFile('cover_image')) {
            if ($user->cover_image != null){

                if (substr($user->porfile_image,0,4)=="http"){
                    $deleted = true;
                } else {
                    $images = File::files(public_path(). '/images/cover_images');
                    $fullPath = public_path() . '/images/cover_images/' . $user->cover_image;
                    foreach ($images as $image){
                        if ($user->cover_image == pathinfo($image)['basename']){
                            $deleted = File::delete($fullPath);
                        }else{
                            $deleted = true;
                        }
                    }
                    //Eliminar el registro
                    if ($deleted) {
                        //Guardar la imagen en nuestro Proyecto
                        $file = $request->file('cover_image');
                        $path = public_path() . '/images/cover_images';
                        $fileName = uniqid() . '-' . $file->getClientOriginalName(); //Renombrar la Imagen
                        $moved = $file->move($path, $fileName);
                        //Crear 1 registro en la tabla de users
                        if ($moved) {
                            $user->cover_image = $fileName;
                        }
                    }
                }
            }else{
                //Guardar la imagen en nuestro Proyecto
                $file = $request->file('cover_image');
                $path = public_path() . '/images/cover_images';
                $fileName = uniqid() . '-' . $file->getClientOriginalName(); //Renombrar la Imagen
                $moved = $file->move($path, $fileName);
                //Crear 1 registro en la tabla de users
                if ($moved) {
                    $user->cover_image = $fileName;
                }
            }
        }

        if ($request->hasFile('porfile_image')) {
            if ($user->porfile_image != null){

                if (substr($user->porfile_image,0,4)=="http"){
                    $deleted = true;
                } else {
                    $images = File::files(public_path(). '/images/porfile_images');
                    $fullPath = public_path() . '/images/porfile_images/' . $user->porfile_image;
                    foreach ($images as $image){
                        //dd(pathinfo($image)['filename']);
                        if ($user->porfile_image == pathinfo($image)['basename']){
                            $deleted = File::delete($fullPath);
                        }else{
                            $deleted = true;
                        }
                    }
                    //Eliminar el registro
                    if ($deleted) {
                        //Guardar la imagen en nuestro Proyecto
                        $file = $request->file('porfile_image');
                        $path = public_path() . '/images/porfile_images';
                        $fileName = uniqid() . '-' . $file->getClientOriginalName(); //Renombrar la Imagen
                        $moved = $file->move($path, $fileName);
                        //Crear 1 registro en la tabla de users
                        if ($moved) {
                            $user->porfile_image = $fileName;
                        }
                    }
                }
            }else{
                //Guardar la imagen en nuestro Proyecto
                $file = $request->file('porfile_image');
                $path = public_path() . '/images/porfile_images';
                $fileName = uniqid() . '-' . $file->getClientOriginalName(); //Renombrar la Imagen
                $moved = $file->move($path, $fileName);
                //Crear 1 registro en la tabla de users
                if ($moved) {
                    $user->porfile_image = $fileName;
                }
            }
        }

        if($user->save() && $user->address->save()){
            $notification = "!Cambios Guardados con exito¡";
            return back()->with(compact('notification'));
        }
    }
}
