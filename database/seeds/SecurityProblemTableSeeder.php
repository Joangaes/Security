<?php

use Illuminate\Database\Seeder;
use App\SecurityProblem;
use App\SecuritySolution;
use App\SecurityProblemSecuritySolution;

class SecurityProblemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $security_problem = new SecurityProblem;
        $security_problem['security_problem_id'] = 1;
        $security_problem['risk_name'] = 'Incendio';
        $security_problem->save();

        $security_solution = new SecuritySolution;
        $security_solution['security_solution_id'] = 1;
        $security_solution['name']='Extintor';
        $security_solution->save();


        SecurityProblemSecuritySolution::associateProblemWithSolution($security_problem->security_problem_id,$security_solution->security_solution_id,15);

        $security_problem = new SecurityProblem;
        $security_problem['security_problem_id'] = 2;
        $security_problem['risk_name'] = 'Ataque Web';
        $security_problem->save();

        $security_solution = new SecuritySolution;
        $security_solution['security_solution_id'] = 2;
        $security_solution['name']='FireWall';
        $security_solution->save();

        SecurityProblemSecuritySolution::associateProblemWithSolution($security_problem->security_problem_id,$security_solution->security_solution_id,30);


        $security_solution = new SecuritySolution;
        $security_solution['security_solution_id'] = 3;
        $security_solution['name']='Proteccion en los modems';
        $security_solution->save();

        SecurityProblemSecuritySolution::associateProblemWithSolution($security_problem->security_problem_id,$security_solution->security_solution_id,45);

        $security_problem = new SecurityProblem;
        $security_problem['risk_name'] = 'Falla Electrica';
        $security_problem['security_problem_id'] = 3;
        $security_problem->save();

        $security_solution = new SecuritySolution;
        $security_solution['security_solution_id'] = 4;
        $security_solution['name']='No Breaks';
        $security_solution->save();

        SecurityProblemSecuritySolution::associateProblemWithSolution($security_problem->security_problem_id,$security_solution->security_solution_id,50);
    }

}
