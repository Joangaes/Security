<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSecurityProblemSecutirySolutionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('security_problem_security_solutions', function (Blueprint $table) {
            $table->increments('security_problem_security_solution_id');
            $table->integer('security_problem_id')->unsigned();
            $table->integer('security_solution_id')->unsigned();
            $table->timestamps();
            $table->double('points_of_security');

            $table->foreign('security_problem_id')
            ->references('security_problem_id')
            ->on('security_problems')
            ->onDelete('cascade');

            $table->foreign('security_solution_id')
            ->references('security_solution_id')
            ->on('security_solutions')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('security_problem_secutiry_solutions');
    }
}
