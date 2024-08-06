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
        Schema::table('users', function (Blueprint $table) {
           $table->string('sdt')->after('name');
           $table->date('ngay_sinh')->after('sdt');
           $table->string('avatar')->after('ngay_sinh');
           $table->integer('role')->after('updated_at')->default(0)->comment('user:0,1:admin');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
