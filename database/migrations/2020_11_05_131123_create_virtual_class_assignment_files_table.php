<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVirtualClassAssignmentFilesTable extends Migration
{
    /**
     * Run the migrations.
     * Note assignment_id changed to virtual_class_assignment_id
     * @return void
     */
    public function up()
    {
        Schema::create('virtual_class_assignment_files', function (Blueprint $table) {
            $table->bigIncrements('id');
//          $table->unsignedBigInteger('assignment_id'); // foreign key
            $table->unsignedBigInteger('virtual_class_assignment_id'); // foreign key
            $table->string('files')->nullable();
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
        Schema::dropIfExists('virtual_class_assignment_files');
    }
}
