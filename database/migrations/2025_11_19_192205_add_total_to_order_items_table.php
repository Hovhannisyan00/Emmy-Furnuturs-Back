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
            // Добавляем поле total если его нет
            if (!Schema::hasColumn('order_items', 'total')) {
                $table->decimal('total', 10, 2)
                    ->default(0)
                    ->after('price')
                    ->comment('Общая сумма за позицию (price * quantity)');
            }

            // Добавляем индексы для оптимизации
            if (!Schema::hasIndex('order_items', 'order_items_order_id_index')) {
                $table->index('order_id');
            }

            if (!Schema::hasIndex('order_items', 'order_items_product_id_index')) {
                $table->index('product_id');
            }

            // Составной индекс для частых запросов
            if (!Schema::hasIndex('order_items', 'order_items_order_product_index')) {
                $table->index(['order_id', 'product_id'], 'order_items_order_product_index');
            }
        });

        // Обновляем существующие записи (если они есть)
        \Illuminate\Support\Facades\DB::statement('
            UPDATE order_items
            SET total = price * quantity
            WHERE total = 0 OR total IS NULL
        ');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('order_items', function (Blueprint $table) {
            // Удаляем поле total при откате миграции
            if (Schema::hasColumn('order_items', 'total')) {
                $table->dropColumn('total');
            }

            // Удаляем индексы (осторожно - проверяем существование)
            $indexes = [
                'order_items_order_id_index',
                'order_items_product_id_index',
                'order_items_order_product_index'
            ];

            foreach ($indexes as $index) {
                if (Schema::hasIndex('order_items', $index)) {
                    $table->dropIndex($index);
                }
            }
        });
    }
};
