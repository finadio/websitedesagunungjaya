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
        Schema::table('services', function (Blueprint $table) {
            $table->text('procedure')->nullable()->after('requirements');
            $table->string('processing_time')->nullable()->after('procedure');
            $table->string('fee')->nullable()->after('processing_time');
            $table->string('form_file')->nullable()->after('fee');
            $table->boolean('is_active')->default(true)->after('form_file');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('services', function (Blueprint $table) {
            $table->dropColumn(['procedure', 'processing_time', 'fee', 'form_file', 'is_active']);
        });
    }
};
