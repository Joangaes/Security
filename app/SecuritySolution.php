<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SecuritySolution extends Model
{
    protected $table = 'security_solutions';

    protected $primaryKey = 'security_solution_id';

    public function SecurityProblemSecuritySolutions()
    {
        return $this->hasMany('App\SecurityProblemSecuritySolution','security_solution_id','security_solution_id');
    }
}
