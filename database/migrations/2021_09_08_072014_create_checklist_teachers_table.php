<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChecklistTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('checklist_teachers', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->integer('int1');
            $table->integer('int2');
            $table->integer('int3');
            $table->integer('int4');
            $table->integer('int5');
            $table->integer('int6');
            $table->integer('int7');
            $table->integer('int8');
            $table->integer('int9');
            $table->integer('int10');
            $table->integer('int11');
            $table->integer('cre12');
            $table->integer('cre13');
            $table->integer('cre14');
            $table->integer('cre15');
            $table->integer('cre16');
            $table->integer('cre17');
            $table->integer('cre18');
            $table->integer('soc19');
            $table->integer('soc20');
            $table->integer('soc21');
            $table->integer('soc22');
            $table->integer('per23');
            $table->integer('per24');
            $table->integer('per25');
            $table->integer('per26');
            $table->integer('per27');
            $table->integer('muc28');
            $table->integer('muc29');
            $table->integer('muc30');
            $table->integer('moc31');
            $table->integer('moc32');
            $table->integer('moc33');
            $table->integer('sp34');
            $table->integer('sp35');
            $table->integer('sp36');
            $table->integer('sp37');
            $table->integer('sp38');
            $table->integer('sp39');
            $table->integer('sp40');
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
        Schema::dropIfExists('checklist_teachers');
    }
}
