<?php

namespace App\Http\Controllers;
use App\SecuritySolution;
use App\SecurityProblem;

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
        unset($input['_token']);
        $security_solution_ids = array_keys($input); 
        $security_solutions = SecuritySolution::find($security_solution_ids);

        $security_problems = $this->getSecurityWithRisks();

        foreach($security_solutions as $security_solution)
        {
            foreach($security_solution->SecurityProblemSecuritySolutions as $security_problem_security_solution)
            {
                $security_problems[$security_problem_security_solution->security_problem_id-1]['risk'] = $security_problems[$security_problem_security_solution->security_problem_id-1]['risk'] - $security_problem_security_solution->points_of_security;
            }
        }

        return view('securityAlgorithim.results')->with(['security_problems' =>$security_problems]);
    } 

    public function getSecurityWithRisks()
    {
        $security_problems = SecurityProblem::All()->toArray();

        foreach($security_problems as &$security_problem)
        {
            $security_problem['risk']=100;
        }
        return $security_problems;
    }
}
