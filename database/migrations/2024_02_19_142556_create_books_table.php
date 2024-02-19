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
        Schema::create('books', function (Blueprint $table) {
            $table->integer('id')->autoIncrement()->unsigned();
            $table->string('name', 100)->comment('書籍名');
            $table->integer('book_id')->comment('書籍ID');
            $table->integer('bookdetail_id')->comment('書籍詳細ID');
            $table->integer('author_id')->comment('著者ID');
            $table->integer('publisher_id')->comment('出版社ID');
            $table->timestamp('created_at')->comment('作成日時');
            $table->timestamp('updated_at')->comment('更新日時');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
