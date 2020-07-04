<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenuPageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu_page', function (Blueprint $table) {
            $table->unsignedBigInteger('menu_id');
            $table->unsignedBigInteger('page_id');

            $table->unsignedBigInteger('order')
                ->default(1);
        });

        Schema::table('menu_page', function (Blueprint $table) {
           $table->foreign('menu_id')
            ->on('menus')
            ->references('id')
            ->onDelete('cascade');

        $table->foreign('page_id')
            ->on('pages')
            ->references('id')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menu_page');
    }
}
