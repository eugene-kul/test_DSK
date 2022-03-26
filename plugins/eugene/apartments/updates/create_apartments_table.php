<?php namespace Eugene\Apartments\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateApartmentsTable extends Migration {
   public function up() {
      Schema::create('eugene_apartments_list', function (Blueprint $table) {
         $table->engine = 'InnoDB';
         $table->increments('id')->unsigned();
         $table->string('name');
         $table->string('deadline');
         $table->boolean('active')->default(1);
         $table->string('tags');
         $table->number('percent')->default(15);
         $table->number('price');
         $table->timestamps();
      });
   }

   public function down() {
      Schema::dropIfExists('eugene_apartments_list');
   }
}
