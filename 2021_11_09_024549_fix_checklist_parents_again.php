<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FixChecklistParentsAgain extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('checklist_parents', function (Blueprint $table) {

            $table->integer('phy19')->nullable()->change();
            $table->integer('phy20')->nullable()->change();
            $table->integer('phy21')->nullable()->change();
            $table->integer('phy22')->nullable()->change();
            $table->integer('phy23')->nullable()->change();
            $table->integer('phy24')->nullable()->change();
            $table->integer('phy25')->nullable()->change();
            $table->integer('se26')->nullable()->change();
            $table->integer('se27')->nullable()->change();
            $table->integer('se28')->nullable()->change();
            $table->integer('se29')->nullable()->change();
            $table->integer('se30')->nullable()->change();
            $table->integer('se31')->nullable()->change();
            $table->integer('se32')->nullable()->change();
            $table->integer('se33')->nullable()->change();
            $table->integer('se34')->nullable()->change();
            $table->integer('spt35')->nullable()->change();
            $table->integer('spt36')->nullable()->change();
            $table->integer('spt37')->nullable()->change();
            $table->integer('spt38')->nullable()->change();
            $table->integer('spt39')->nullable()->change();
            $table->integer('spt40')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('checklist_parents');
    }
}
