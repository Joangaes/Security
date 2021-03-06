<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SecurityProblem extends Model
{
    protected $table = 'security_problems';

    protected $primaryKey = 'security_problem_id';


    public function SecurityProblemSecuritySolutions()
    {
        return $this->hasMany('App\SecurityProblemSecuritySolution','security_problem_id','security_problem_id');
    }
}
