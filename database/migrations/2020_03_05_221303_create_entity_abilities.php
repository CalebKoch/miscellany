<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntityAbilities extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entity_abilities', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('entity_id');
            $table->unsignedInteger('ability_id');
            $table->unsignedInteger('created_by')->nullable();
            $table->unsignedTinyInteger('position')->default(0);
            $table->unsignedBigInteger('visibility_id')->default(1);
            $table->text('note')->nullable();
            $table->tinyInteger('charges')->nullable();
            $table->timestamps();

            // If we delete the entity or target, remove mentions
            $table->foreign('entity_id')->references('id')->on('entities')->onDelete('cascade');
            $table->foreign('ability_id')->references('id')->on('abilities')->onDelete('cascade');
            $table->foreign('created_by')->references('id')->on('users')->onDelete('set null');
            $table->foreign('visibility_id')->references('id')->on('visibilities')->cascadeOnDelete();

            $table->index(['position']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('entity_abilities');
    }
}
