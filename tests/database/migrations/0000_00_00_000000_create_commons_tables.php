<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreateCommonsTables extends Migration
{
    /**
     * Do the migration.
     */
    public function up() {
        Schema::create(config('friendships.tables.fr_pivot'), function (Blueprint $table) {
            $table->increments('id');
            $table->morphs('sender');
            $table->morphs('recipient');
            $table->tinyInteger('status')->default(0);
            $table->timestamps();
        });

    }

    /**
     * Back the migration.
     */
    public function down() {
        Schema::dropIfExists(config('friendships.tables.fr_pivot'));
    }

}
