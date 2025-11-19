<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('coupons', function (Blueprint $table) {
            $table->id();
            $table->string('coupon');
            $table->foreignIdFor(\App\Models\User\User::class)
                ->constrained('users')
                ->onDelete('cascade');

            $table->boolean('is_expired')->default(false);
            $table->integer('discount');
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('coupons');
    }
};
