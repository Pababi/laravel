<?php

use App\Models\Post;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        $post = Post::first();
        $postId = $post->id;
        Schema::table('comments', function (Blueprint $table) use ($postId) {
            $table->foreignId('post_id')->default($postId)->constrained('posts')->onDelete('restrict');
        });
    }

    public function down(): void
    {
        Schema::disableForeignKeyConstraints();
        Schema::table('comments', function (Blueprint $table) {
            $table->dropForeign(['post_id']);
            $table->dropColumn('post_id');
        });
        Schema::enableForeignKeyConstraints();
    }
};
