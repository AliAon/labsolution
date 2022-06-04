<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class DynamicPDFController extends Controller
{
    //
    public function convert() 
    { 

        $data = [
            'title' => 'Welcome to ItSolutionStuff.com',
            'date' => date('m/d/Y')
        ];
          
        $pdf = Pdf::loadView('users.report', $data);
    
        return $pdf->download('itsolutionstuff.pdf');
    } 

}
