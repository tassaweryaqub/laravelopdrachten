<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            /* foreign id naar user tabel , nullable want het is optioneel*/ 
            $table->foreignId('user_id')->nullable()->constrained()
            ->onUpdate('no action')->onDelete('no action'); 
            /* foreign id naar project tabel , cascade want het mag verwijderd worden */ 
            $table->foreignId('project_id')->constrained()
            ->onUpdate('cascade')->onDelete('cascade'); 
            /* foreign id naar activity tabel met restrict want het mag niet zo zijn dat een activiteit verwijderd kan worden als het nog een taak heeft */
            $table->foreignId('activity_id')->constrained()
            ->onUpdate('restrict')->onDelete('restrict'); 
            
            $table->char('task', 200); 
            $table->date('begindate');  
            $table->date('enddate');  
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
}
