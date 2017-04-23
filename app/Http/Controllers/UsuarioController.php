<?php

namespace App\Http\Controllers;
use App\Usuario;
use Yajra\Datatables\Facades\Datatables;
use Illuminate\Http\Request;
use App\Http\Requests;

class UsuarioController extends Controller
{
    public function usuarios()
    {   
        return Datatables::eloquent(Usuario::query()->where('tipo_id',2))->make(true);
    }
    public function email(Request $request)
    {   
        if ($request->a == 0) {
            $respuesta=Datatables::eloquent(Usuario::query()->where('email', $request->fieldValue))->count();
            return json_encode(array("email",!$respuesta)); 
        } else {
            $usuario=Usuario::find($request->a);
            $email=$request->fieldValue;
            $email_m=$usuario->email;
            if ($email==$email_m) {
                return json_encode(array("email",true));
            } else {
                $respuesta=Datatables::eloquent(Usuario::query()->where('email', $request->fieldValue))->count();
                return json_encode(array("email",!$respuesta));
            } 
        }               
    }

    public function store(Request $request)
    {
        $usuario = new Usuario;
        $usuario->nombre = $request->nombre;
        $usuario->escuela = $request->escuela;
        $usuario->email = $request->email;
        $usuario->password = bcrypt($request->password);
        $usuario->remember_token = str_random(10);
        $usuario->api_token = str_random(50);
        $usuario->save();
        flash()->overlay('El usuario '.$request->nombre.' a sido Registrado','Registro');
        return redirect('login');
    }


    public function show($id)
    {  
    }
    public function edit($id)
    {
        $usuario=Datatables::eloquent(Usuario::query()->where('id', $id)->where('tipo_id',2))->count();
        if ($usuario == 1) {
            $usuario=Usuario::find($id);
            return view('auth.update',compact('usuario'));
        } else {
            flash()->overlay('Error con la peticion','Actualizado');
            return redirect('/');
        }               
    }
    public function update(Request $request, $id)
    {
        $con=Datatables::eloquent(Usuario::query()->where('id', $id)->where('tipo_id',2))->count();
        if ($con==1) {
            $usuario = Usuario::find($id);
            $usuario->nombre = $request->nombre;
            $usuario->escuela = $request->escuela;
            $usuario->email = $request->email;
            $usuario->save();
            flash()->overlay('El usuario '.$usuario->nombre.' a sido Actualizado','Actualizado');
            return redirect('/');
        } else {
           flash()->overlay('Error con la peticion','Actualizado');
            return redirect('/'); 
        }
    }
    public function destroy($id)
    {
        $usuario=Usuario::find($id);
        if ($usuario->where('tipo_id',2) != false) {
            $usuario->delete($id);
           flash()->overlay('El usuario '.$usuario->nombre.' a sido eliminado','Eliminado');
            return redirect('/');        
        } else {
            flash()->overlay('Error con la peticion','Eliminado');
            return redirect('/'); 
        }       
    }
}
