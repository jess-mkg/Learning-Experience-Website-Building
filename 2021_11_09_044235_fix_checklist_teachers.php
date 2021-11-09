<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FixChecklistTeachers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('checklist_teachers', function (Blueprint $table) {

            $table->integer('cre12')->nullable()->change();
            $table->integer('cre13')->nullable()->change();
            $table->integer('cre14')->nullable()->change();
            $table->integer('cre15')->nullable()->change();
            $table->integer('cre16')->nullable()->change();
            $table->integer('cre17')->nullable()->change();
            $table->integer('cre18')->nullable()->change();
            $table->integer('soc19')->nullable()->change();
            $table->integer('soc20')->nullable()->change();
            $table->integer('soc21')->nullable()->change();
            $table->integer('soc22')->nullable()->change();
            $table->integer('per23')->nullable()->change();
            $table->integer('per24')->nullable()->change();
            $table->integer('per25')->nullable()->change();
            $table->integer('per26')->nullable()->change();
            $table->integer('per27')->nullable()->change();
            $table->integer('muc28')->nullable()->change();
            $table->integer('muc29')->nullable()->change();
            $table->integer('muc30')->nullable()->change();
            $table->integer('moc31')->nullable()->change();
            $table->integer('moc32')->nullable()->change();
            $table->integer('moc33')->nullable()->change();
            $table->integer('sp34')->nullable()->change();
            $table->integer('sp35')->nullable()->change();
            $table->integer('sp36')->nullable()->change();
            $table->integer('sp37')->nullable()->change();
            $table->integer('sp38')->nullable()->change();
            $table->integer('sp39')->nullable()->change();
            $table->integer('sp40')->nullable()->change();

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
