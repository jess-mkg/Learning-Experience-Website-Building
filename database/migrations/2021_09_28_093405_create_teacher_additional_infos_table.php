<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeacherAdditionalInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teacher_additional_infos', function (Blueprint $table) {
            $table->id();
            $table->string('goals');
            $table->string('intrests');
            $table->string('extraIntinfo');
            $table->string('extraCreinfo');
            $table->string('extraSocinfo');
            $table->string('extraPreinfo');
            $table->string('extraMucinfo');
            $table->string('extraMocinfo');
            $table->string('extraSpinfo');
            $table->string('additional');
            $table->string('behaviour');
            $table->string('traits');
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
        Schema::dropIfExists('teacher_additional_infos');
    }
}
