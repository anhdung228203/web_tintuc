<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->string('tin_noi_bat')->change();
            $table->string('tin_moi')->change();
            $table->string('is_show_home')->change();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->integer('tin_noi_bat')->default(1)->change();
            $table->integer('tin_moi')->default(1)->change();
            $table->integer('is_show_home')->change();
            
        });
    }
};
