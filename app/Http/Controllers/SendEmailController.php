<?php

namespace App\Http\Controllers;

use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Http\Request;
use Mail;
use App\Models\Estudiante;
use App\Mail\RegistrosMail;


class SendEmailController extends Controller
{
    public function index(){
        $quienes = Estudiante::where('pago',1)->where('enviado',0)->get();
        $i=0;
        foreach ($quienes as $quien){
            if($i<=50){
                $alumno = $quien->nombre.' '.$quien->appat;
                $correo = $quien->correo;
                $content = [
                    'subject'=>'Registro ARGOS Ensenada 2023',
                    'persona'=>$alumno,
                    'quien'=>base64_encode($quien->id)
                ];
                Mail::to($correo)->send(new RegistrosMail($content));
                Estudiante::where('id',$quien->id)->update([
                    'enviado'=>1
                ]);
                $i++;
            }
        }
        return view('admin.enviados')->with(compact('i'));
    }
}
