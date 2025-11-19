<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('orders', function (Blueprint $table) {
            // Добавляем недостающие колонки
            $table->string('order_number')->unique()->nullable()->after('user_id');
            $table->decimal('subtotal', 10, 2)->default(0)->after('total');
            $table->decimal('tax', 10, 2)->default(0)->after('subtotal');
            $table->decimal('shipping_cost', 10, 2)->default(0)->after('tax');

            // Shipping address columns
            $table->string('shipping_first_name')->nullable()->after('shipping_cost');
            $table->string('shipping_last_name')->nullable()->after('shipping_first_name');
            $table->string('shipping_company')->nullable()->after('shipping_last_name');
            $table->text('shipping_address')->nullable()->after('shipping_company');
            $table->string('shipping_city')->nullable()->after('shipping_address');
            $table->string('shipping_state')->nullable()->after('shipping_city');
            $table->string('shipping_country')->nullable()->after('shipping_state');
            $table->string('shipping_zip_code')->nullable()->after('shipping_country');
            $table->string('shipping_email')->nullable()->after('shipping_zip_code');
            $table->string('shipping_phone')->nullable()->after('shipping_email');
            $table->text('notes')->nullable()->after('shipping_phone');
        });
    }

    public function down(): void
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->dropColumn([
                'order_number',
                'subtotal',
                'tax',
                'shipping_cost',
                'shipping_first_name',
                'shipping_last_name',
                'shipping_company',
                'shipping_address',
                'shipping_city',
                'shipping_state',
                'shipping_country',
                'shipping_zip_code',
                'shipping_email',
                'shipping_phone',
                'notes'
            ]);
        });
    }
};
