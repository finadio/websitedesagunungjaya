<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            if (!Schema::hasColumn('posts', 'excerpt')) {
                $table->text('excerpt')->nullable()->after('slug');
            }
        });
        
        try {
            DB::statement("ALTER TABLE posts MODIFY category ENUM('news', 'announcement', 'event', 'achievement') DEFAULT 'news'");
        } catch (\Exception $e) {
            // Already updated or different issue
        }
    }

    public function down(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            if (Schema::hasColumn('posts', 'excerpt')) {
                $table->dropColumn('excerpt');
            }
        });
        
        try {
            DB::statement("ALTER TABLE posts MODIFY category ENUM('news', 'announcement') DEFAULT 'news'");
        } catch (\Exception $e) {
            // Already reverted
        }
    }
};
