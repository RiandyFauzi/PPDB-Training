<?php

namespace App\Http\Controllers;

use App\Daftar;
use PDF;
use Illuminate\Http\Request;

class PrintController extends Controller
{
    public function print($id)
    {
        $daftar = Daftar::findorFail($id);
        $pdf = PDF::loadview('daftar.print', compact('daftar'))->setPaper('A4','portrait');
        return $pdf->stream();
    }
}
