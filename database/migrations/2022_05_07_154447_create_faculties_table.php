<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faculties', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->text('image');
            $table->text('designation');
            $table->text('position');
            $table->text('email');
            $table->text('contact');
            $table->text('research_interests');
            // $table->integer('publications_id');
            // $table->integer('education_id');
            // $table->integer('awards_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('faculties');
    }
};
