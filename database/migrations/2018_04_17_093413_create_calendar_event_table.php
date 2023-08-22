<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCalendarEventTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calendar_event', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('calendar_id')->unsigned();
            $table->integer('event_id')->unsigned();
            $table->string('date');
            $table->string('colour')->nullable();
            $table->smallInteger('length')->default(1);
            $table->string('recurring_until', 12)->nullable();
            $table->timestamps();

            $table->index('date');

            // Foreign
            $table->foreign('calendar_id')->references('id')->on('calendars')->onDelete('cascade');
            $table->foreign('event_id')->references('id')->on('events')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('calendar_event');
    }
}
