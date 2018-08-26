<?php

namespace App\Http\Controllers;
use App\SecuritySolution;

use Illuminate\Http\Request;

class SecurityAlgorithimController extends Controller
{
    public function getOptions()
    {
        $security_solutions = SecuritySolution::All();

        return view('securityAlgorithim.getOptions')->with(['security_solutions'=>$security_solutions]);
    }

    public function getAlgorithimScores(Request $request)
    {
        $input = $request->all();
        dd($input);
    } 
}
