<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBannersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banners', function (Blueprint $table) {
            $table->increments('id');
            $table->string('color');
            $table->string('title');
            $table->string('detail');
        });

        DB::table('banners')->insert([
            'color' => '#0f2b56',
            'title' => 'Banner 1',
            'detail' => 'Detail of banner 1'
        ]);
        DB::table('banners')->insert([
            'color' => '#9c1837',
            'title' => 'Banner 2',
            'detail' => 'Detail of banner 2'
        ]);
        DB::table('banners')->insert([
            'color' => '#0f2b56',
            'title' => 'Banner 3',
            'detail' => 'Detail of banner 3'
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('banners');
    }
}
