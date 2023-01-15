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
        if(!Schema::hasTable('quiz_answers')) {
            Schema::create('quiz_answers', function (Blueprint $table) {
                $table->increments('id');
                $table->string('name', 255)->nulltable(false);
                $table->string('carMark', 255)->nulltable(false);
                $table->text('whyCar', 255)->nulltable(false);
                $table->boolean('automatic');
                $table->boolean('mechanic');
                $table->integer('exp')->nulltable(false);
                $table->text('comment', 255);
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
