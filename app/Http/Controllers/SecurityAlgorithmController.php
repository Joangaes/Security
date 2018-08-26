<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SecurityAlgorithmController extends Controller
{
    public function getOptions()
    {
        $security_solutions = SecuritySolution::All();

        return view('securityAlgorithim.getOptions')->with(['security_solutions'=>$security_solutions]);
    }
}
