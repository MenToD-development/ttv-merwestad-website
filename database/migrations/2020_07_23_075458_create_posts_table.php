<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('user_id')
                ->nullable();

            $table->string('title');
            $table->string('image')
                ->nullable();
            $table->text('content')
                ->nullable();

            $table->boolean('published')
                ->default(false);

            $table->timestamp('published_at')
                ->nullable();
            $table->timestamp('published_till')
                ->nullable();

            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('posts', function (Blueprint $table) {
            $table->foreign('user_id')
                ->on('users')
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
        Schema::dropIfExists('posts');
    }
}
