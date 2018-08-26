<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SecurityProblemSecuritySolution extends Model
{
    protected $table = 'security_problem_security_solutions';

    protected $primaryKey = 'security_problem_securitu_solution_id';

    protected $fillable = ['points_of_security'];

    public function SecurityProblem()
    {
        return $this->hasOne('App\SecurityProblem','security_problem_id','security_problem_id');
    }

    public function SecuritySolution()
    {
        return $this->hasOne('App\SecuritySolution','security_solution_id','security_solution_id');
    }
}
