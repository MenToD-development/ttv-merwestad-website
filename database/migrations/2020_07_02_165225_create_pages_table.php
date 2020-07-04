<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->id();

            /* Relations */
            $table->unsignedBigInteger('user_id')
                ->nullable();
            $table->unsignedBigInteger('parent_id')
                ->nullable();

            /* Page information */
            $table->string('name');
            $table->text('content')
                ->nullable();

            /* Meta */
            $table->string('title')
                ->nullable();
            $table->text('description')
                ->nullable();
            $table->string('image')
                ->nullable();

            /* Settings */
            $table->boolean('protected')
                ->default(false);
            $table->boolean('visible')
                ->default(false);

            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('pages', function (Blueprint $table) {
            $table->foreign('user_id')
                ->on('users')
                ->references('id')
                ->onDelete('set null');

            $table->foreign('parent_id')
                ->on('pages')
                ->references('id')
                ->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pages');
    }
}
