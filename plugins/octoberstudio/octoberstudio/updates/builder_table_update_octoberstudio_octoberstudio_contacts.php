<?php namespace OctoberStudio\Octoberstudio\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateOctoberstudioOctoberstudioContacts extends Migration
{
    public function up()
    {
        Schema::table('octoberstudio_octoberstudio_contacts', function($table)
        {
            $table->text('schedule')->nullable();
            $table->text('service')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('octoberstudio_octoberstudio_contacts', function($table)
        {
            $table->dropColumn('schedule');
            $table->dropColumn('service');
        });
    }
}
