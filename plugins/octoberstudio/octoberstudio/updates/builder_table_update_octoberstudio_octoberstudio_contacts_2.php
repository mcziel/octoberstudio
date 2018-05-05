<?php namespace OctoberStudio\Octoberstudio\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateOctoberstudioOctoberstudioContacts2 extends Migration
{
    public function up()
    {
        Schema::table('octoberstudio_octoberstudio_contacts', function($table)
        {
            $table->text('type');
        });
    }
    
    public function down()
    {
        Schema::table('octoberstudio_octoberstudio_contacts', function($table)
        {
            $table->dropColumn('type');
        });
    }
}
