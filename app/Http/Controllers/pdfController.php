<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use Barryvdh\DomPDF\Facade\Pdf;
use Barryvdh\DomPDF\PDF as DomPDFPDF;

class pdfController extends Controller
{
    public function pdfView($id = null)

    {
        $student = Student::findOrFail($id);
        return View('Student.carte', compact('student'));
        

    }
    public function pdfConvert($id= null)
    {
        $student = Student::findOrFail($id); 

        $pdf = PDF::loadView('Student.carte')->setOptions(['defaultFont' => 'sans serif']);
        return $pdf->download('carte.pdf');;
    }

    
   
}

