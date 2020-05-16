<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class PDFController extends Controller
{
    public function PDFgenerator()
    {
        $pdf = PDF::loadView('calories');
        return $pdf->download('calories.pdf');
    }
}
