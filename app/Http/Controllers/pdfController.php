<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Barryvdh\DomPDF\Facade as PDF;


class pdfController extends Controller
{
    public function pdfView($id = null)

    {
   
        $student = Student::findOrFail($id);
$pdf = PDF::loadView('Student.carte', compact('student'));
return $pdf->download('carte.pdf');
    }

    
    public function pdfConvert()
    {

    }

}

