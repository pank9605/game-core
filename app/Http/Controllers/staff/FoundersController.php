<?php

namespace App\Http\Controllers\Staff;
use App\Http\Controllers\Controller;
use App\Address;
use App\User;
use App\Role;
use http\Env\Response;
use Illuminate\Http\Request;
use File;

class FoundersController extends Controller
{

    public function index()
    {
        //Obtiene todos los fundadores
        $roles = Role::all();
        $role = $roles->where('name','Fundador');
        $id=$role[0]->id;
        $totalFounders = User::where('role_id',$role[0]->id)->count();

        $founders = User::where('role_id',$id)->orderBy('id','desc')->paginate(5);
        return view('founders.index')->with(compact('founders','totalFounders'));

    }


    public function create()
    {
        //Muestra el formulario para registrar un fundador
        return view('founders.create');
    }


    public function store(Request $request)
    {
        //
        $founder = new User();
        $address = new Address();

        $founder->name = $request->input('name');
        $founder->first_name = $request->input('first_name');
        $founder->last_name = $request->input('last_name');
        $founder->birthdate = $request->input('birthdate');
        $founder->gender = $request->input('gender');
        $founder->email = $request->input('email');
        $founder->password = bcrypt($request->input('password'));

        //$username = $founder->name.substr($founder->first_name,0,2).substr($founder->last_name,0,1)
          //  .substr($founder->birthdate,5,2).substr($founder->birthdate,8,2).'_'.substr($founder->birthdate,0,4);

        //$founder->username = $username;

        $roles = Role::all();
        $role = $roles->where('name','Fundador');
        $id=$role[0]->id;
        $founder->role_id = $id;

        $address->street = $request->input('street');
        $address->outdoor_number = $request->input('outdoor_numer');
        $address->interior_number = $request->input('interior_number');
        $address->colony = $request->input('colony');
        $address->city = $request->input('city');
        $address->zip = $request->input('zip');
        $address->cellphone = $request->input('cellphone');
        $address->phone = $request->input('phone');

        if ($founder->save() && $founder->address()->save($address)){
            $notification ="!Registro Exitoso¡";
            return redirect('/founder')->with(compact('notification'));
        }else{
            $notificationFaill ="Registro Fallido :(";
            return redirect('/founder')->with(compact('notificationFaill'));
        }
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
        $founder = User::find($id);
        $address = $founder->address;
        return view('founders.edit')->with(compact('founder','address'));

    }


    public function update(Request $request, $id)
    {
        //
        $founder = User::find($id);
        $founder->name = $request->input('name');
        $founder->first_name = $request->input('first_name');
        $founder->last_name = $request->input('last_name');
        $founder->birthdate = $request->input('birthdate');
        $founder->gender = $request->input('gender');
        $founder->email = $request->input('email');

        if ($request->input('password') != null){
            $founder->password = bcrypt($request->input('password')) ;
        }

        $founder->address->street = $request->input('street');
        $founder->address->outdoor_number = $request->input('outdoor_number');
        $founder->address->interior_number = $request->input('interior_number');
        $founder->address->colony = $request->input('colony');
        $founder->address->city = $request->input('city');
        $founder->address->zip = $request->input('zip');
        $founder->address->cellphone = $request->input('cellphone');
        $founder->address->phone = $request->input('phone');

        if($founder->save() && $founder->address->save()){
            $notification = "!Cambios Guardados con exito¡";
            return back()->with(compact('notification'));
        }else{
            $notificationFaill = "No se Han podido Guardar los Cambios :(";
            return back()->with(compact('notificationFaill'));
        }
    }


    public function destroy($id)
    {
        //
        $founder = User::find($id);

        if ($founder->role->name === "Fundador") {
            if ($founder->delete()){
                $notification = "!El Fundador se ha eliminado correctamente¡";
                return back()->with(compact('notification'));
            }
        }
    }



/*if ($founder->cover_image != null || $founder->porfile_image != null) {
if (substr($founder->cover_image, 0, 4) == "http") {
$deleted = true;
} else {
    $fullPath = public_path() . '/images/cover_images/' . $founder->cover_image;
    $deleted = File::delete($fullPath);
}

if (substr($founder->porfile_image, 0, 4) == "http") {
    $deleted = true;
} else {
    $fullPath = public_path() . '/images/porfile_images/' . $founder->porfile_image;
    $deleted = File::delete($fullPath);
}
//Eliminar el registro
if ($deleted) {
    $founder->delete();
    $founder->address()->delete();
    $notification = "!El Fundador se ha eliminado correctamente¡";
    return back()->with(compact('notification'));
}
} else {
    $founder->address()->delete();
    $founder->delete();

    $notification = "!El Fundador se ha eliminado correctamente¡";
    return back()->with(compact('notification'));
}*/

}
