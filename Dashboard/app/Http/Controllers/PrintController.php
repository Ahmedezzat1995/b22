<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrintController extends Controller
{
    public function printData()
    {
        return view('print');
    }

    public function printVar()
    {
        $name = 'ahmed';
        $age = 35;
        return view('print-var',compact('name','age'));
    }
}
