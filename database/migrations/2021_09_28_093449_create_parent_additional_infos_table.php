<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParentAdditionalInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parent_additional_infos', function (Blueprint $table) {
            $table->id();
            $table->string('goals');
            $table->string('intrests');
            $table->string('extracoginfo');
            $table->string('extraphyinfo');
            $table->string('extraSEinfo');
            $table->string('extrasptinfo');
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
        Schema::dropIfExists('parent_additional_infos');
    }
}
