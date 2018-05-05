<?php namespace OctoberStudio\Octoberstudio\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateOctoberstudioOctoberstudioProjects extends Migration
{
    public function up()
    {
        Schema::create('octoberstudio_octoberstudio_projects', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->text('name');
            $table->text('short_description');
            $table->text('description');
            $table->text('concept');
            $table->text('development');
            $table->text('link');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('octoberstudio_octoberstudio_projects');
    }
}
