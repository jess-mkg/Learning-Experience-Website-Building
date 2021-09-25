<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChecklistParentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('checklist_parents', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->integer('cog1');
            $table->integer('cog2');
            $table->integer('cog3');
            $table->integer('cog4');
            $table->integer('cog5');
            $table->integer('cog6');
            $table->integer('cog7');
            $table->integer('cog8');
            $table->integer('cog9');
            $table->integer('cog10');
            $table->integer('cog11');
            $table->integer('cog12');
            $table->integer('cog13');
            $table->integer('cog14');
            $table->integer('cog15');
            $table->integer('cog16');
            $table->integer('phy17');
            $table->integer('phy18');
            $table->integer('phy19');
            $table->integer('phy20');
            $table->integer('phy21');
            $table->integer('phy22');
            $table->integer('phy23');
            $table->integer('phy24');
            $table->integer('phy25');
            $table->integer('se26');
            $table->integer('se27');
            $table->integer('se28');
            $table->integer('se29');
            $table->integer('se30');
            $table->integer('se31');
            $table->integer('se32');
            $table->integer('se33');
            $table->integer('se34');
            $table->integer('spt35');
            $table->integer('spt36');
            $table->integer('spt37');
            $table->integer('spt38');
            $table->integer('spt39');
            $table->integer('spt40');
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
        Schema::dropIfExists('checklist_parents');
    }
}
