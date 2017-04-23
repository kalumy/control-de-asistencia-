<?php

namespace App\Http\Controllers;

use App\Asistencia;
use App\Asistencias_vw;
use Yajra\Datatables\Facades\Datatables;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;


class AsistenciaController extends Controller
{
    public function asistencias($id)
    {
        return Datatables::eloquent(Asistencias_vw::query()->where('estado',1)->where('usuario_id',$id))->make(true);        
    }
    public function reporteVer($id)
    {
        $reporte= Asistencia::find($id);
        return '<iframe src="/pdfs/'.$reporte->reporte.'" frameborder="0" marginheight="0" marginwidth="0" width="100%" height="100%" scrolling="auto" allowfullscreen></iframe>';
    }
    public function reportesId($id)
    {
        return Datatables::eloquent(Asistencias_vw::query()->where('usuario_id',$id))->make(true);
    }
    public function reportes($id)
    {
        return view('reportes')->with('id_usuario',$id);
    }
    public function reporte(Request $request)
    {
        $nombre=$request->id.'_reporte_'.date("Y-m-d").'.pdf';
        $asistencia = Asistencia::where('usuario_id', $request->id)->where('dia', date("Y-m-d"))->update(['reporte' => $nombre]);
            
        Storage::disk('local')->put($nombre
            , \File::get($request->reporte)
        );
            
        
        return redirect('/');
        
    }

    public function verificar($id)
    {    
        $dia = Asistencia::query()->where('dia',date("Y-m-d"))->where('usuario_id',$id)->count();
        $verificado='verificado';
        if ($dia===0) {
            $asistencia = new Asistencia;
            $asistencia->dia = date("Y-m-d");
            $asistencia->usuario_id = $id;
            $asistencia->save();
            return redirect('/')->with('v', $verificado);
        } else {
            $est =Asistencia::query()->where('dia',date("Y-m-d"))->where('usuario_id',$id)->get();
            if ($est[0]->estado == 0) {
                return redirect('/')->with('v', $verificado);
            } else {
                flash()->overlay('Usted ya termino su session del dia','Asistencia');
                return redirect('/')->with('v','noverificado');
            }       
        }                      
        
    }
    public function finAsistencia($dia,$id)
    {
        $dia = Asistencias_vw::query()->where('dia',$dia)->where('usuario_id',$id)->get();
        if ($dia[0]->estado == 1) {
            flash()->overlay('Usted ya termino su session del dia','Asistencia');
            return redirect('/')->with('v','noverificado');
        } else {
            $fin = Asistencia::find($dia[0]->id);
            $fin->estado=1;
            $fin->save();
           flash()->overlay('Usted ya termino su session del dia','Asistencia');
            return redirect('/')->with('v','noverificado');
        } 
    }
}
