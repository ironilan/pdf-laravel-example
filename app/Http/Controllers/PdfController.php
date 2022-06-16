<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PdfController extends Controller
{
    public function download()
    {
        $data = [
            'titulo' => 'Styde.net'
        ];

        //$pdf = \PDF::loadView('vista-pdf', $data);

        return \PDF::loadView('vista-pdf', $data)
        ->stream('archivo.pdf');
    }
}
