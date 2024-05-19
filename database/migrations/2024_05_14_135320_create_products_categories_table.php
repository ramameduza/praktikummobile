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
Schema::create('product_categories', function (Blueprint $table) {
$table->id();
$table->text('product_category_name');
$table->string('status');
$table->enum('deleted', ['true', 'false'])->default('false');
$table->timestamps();
});
}


/**
* Reverse the migrations.
*/
public function down(): void
{
Schema::dropIfExists('product_categories');
}
};