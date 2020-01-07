<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mains', function (Blueprint $table) {
            $table->integer('depart')->nullable(false);
            $table->string('inv_num')->nullable(false);
            $table->string('name')->default(null);
            $table->integer('accepted')->nullable(false);
            $table->integer('written_off')->default(null);
            $table->decimal('cost')->default(null);

            $table->foreign('depart')->references('depart_number')->on('depart');
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
        Schema::dropIfExists('mains');
    }
}
