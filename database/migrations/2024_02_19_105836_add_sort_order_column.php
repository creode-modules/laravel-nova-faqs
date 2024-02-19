<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Add order column to the model
        Schema::table('faqs', function (Blueprint $table) {
            $table->integer('sort_order');
        });

        // Set default sort order (just copy ID to sort order)
        DB::statement('UPDATE faqs SET sort_order = id');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Remove sort order column.
        Schema::table('faqs', function (Blueprint $table) {
            $table->dropColumn('sort_order');
        });
    }
};
