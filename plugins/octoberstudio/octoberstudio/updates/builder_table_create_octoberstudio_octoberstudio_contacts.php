<?php namespace OctoberStudio\Octoberstudio\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateOctoberstudioOctoberstudioContacts extends Migration
{
    public function up()
    {
        Schema::create('octoberstudio_octoberstudio_contacts', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->text('name');
            $table->text('lastname');
            $table->text('phone');
            $table->text('email');
            $table->text('message');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('octoberstudio_octoberstudio_contacts');
    }
}
