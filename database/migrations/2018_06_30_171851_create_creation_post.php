<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCreationPost extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('creation_posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('creation_material');
            $table->string('creation_media');
            $table->string('creation_dimension');
            $table->integer('production_year');
            $table->string('production_by');
            $table->string('tags');
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
        Schema::dropIfExists('creation_posts');
    }
}
