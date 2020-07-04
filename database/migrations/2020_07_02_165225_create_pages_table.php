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
            $table->unsignedBigInteger('author')
                ->nullable();
            $table->unsignedBigInteger('parent')
                ->nullable();

            /* Page information */
            $table->string('name');
            $table->text('content');

            /* Meta */
            $table->string('title');
            $table->text('description');
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
            $table->foreign('author')
                ->on('users')
                ->references('id')
                ->onDelete('set null');

            $table->foreign('parent')
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
