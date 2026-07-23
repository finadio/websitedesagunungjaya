<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->text('excerpt')->nullable()->after('slug');
        });
        
        // Update category enum to include event and achievement
        DB::statement("ALTER TABLE posts MODIFY category ENUM('news', 'announcement', 'event', 'achievement') DEFAULT 'news'");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->dropColumn(['excerpt']);
        });
        
        DB::statement("ALTER TABLE posts MODIFY category ENUM('news', 'announcement') DEFAULT 'news'");
    }
};
