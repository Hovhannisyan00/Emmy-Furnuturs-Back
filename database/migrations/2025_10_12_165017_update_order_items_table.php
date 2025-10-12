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
        Schema::table('order_items', function (Blueprint $table) {
            // Убедимся, что поля существуют, потом изменим/добавим новые
            if (!Schema::hasColumn('order_items', 'total')) {
                $table->decimal('total', 12, 2)
                    ->after('price')
                    ->nullable()
                    ->comment('Общая сумма за позицию');
            }

            // Добавляем дефолтные значения, если их не было
            $table->unsignedInteger('quantity')->default(1)->change();
            $table->decimal('price', 10, 2)->default(0)->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('order_items', function (Blueprint $table) {
            if (Schema::hasColumn('order_items', 'total')) {
                $table->dropColumn('total');
            }

            // Убираем дефолты обратно, если нужно
            $table->integer('quantity')->change();
            $table->decimal('price', 10, 2)->change();
        });
    }
};
