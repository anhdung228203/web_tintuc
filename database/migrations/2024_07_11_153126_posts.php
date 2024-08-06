<?php

use App\Models\admin\PheDuyet;
use App\Models\Admin\Tag;
use App\Models\User;
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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Tag::class)->constrained();
            $table->foreignIdFor(User::class)->constrained();
            $table->foreignIdFor(PheDuyet::class)->constrained();
            $table->string('tieu_de',255);
            $table->string('mo_ta_ngan');
            $table->text('mo_ta');
            $table->integer('luot_xem')->default(0);
            $table->string('anh_dai_dien');
            $table->integer('tin_noi_bat')->default(1);
            $table->integer('tin_moi')->default(1);
            $table->integer('is_show_home');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
