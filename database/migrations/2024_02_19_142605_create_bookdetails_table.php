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
        Schema::create('bookdetails', function (Blueprint $table) {
            $table->integer('id')->autoIncrement()->unsigned();
            $table->string('isbn', 100)->comment('ISBNコード');
            $table->date('published_date')->comment('出版日');
            $table->integer('price')->comment('価格');
            $table->timestamp('created_at')->comment('作成日時');
            $table->timestamp('updated_at')->comment('更新日時');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookdetails');
    }
};
