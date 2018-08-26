<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SecurityProblemSecuritySolution extends Model
{
    protected $table = 'security_problem_security_solutions';

    protected $primaryKey = 'security_problem_security_solution_id';

    protected $fillable = ['points_of_security'];

    public function SecurityProblem()
    {
        return $this->hasOne('App\SecurityProblem','security_problem_id','security_problem_id');
    }

    public function SecuritySolution()
    {
        return $this->hasOne('App\SecuritySolution','security_solution_id','security_solution_id');
    }

    public static function associateProblemWithSolution($security_problem_id,$security_solution_id,$points_of_security)
    {
        $security_problem_security_solution = static::query()->create(['security_problem_id'=>$security_problem_id,'security_solution_id'=>$security_solution_id,'points_of_security'=>$points_of_security]);

        return $security_problem_security_solution;
    }
}
