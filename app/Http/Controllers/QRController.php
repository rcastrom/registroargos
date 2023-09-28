<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QRController extends Controller
{
    public function index(Request $request){
        $id=base64_decode($request->id);
        return view('correo.qr')->with(compact('id'));
    }
}
