<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseMemberPermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_member_permissions', function (Blueprint $table) {
            $table->unsignedBigInteger('course_member_id');
            $table->unsignedBigInteger('permission_id');
            $table->primary(['course_member_id', 'permission_id']);

            $table->foreign('course_member_id')
                ->references('id')
                ->on('course_members')
                ->onDelete('cascade');

            $table->foreign('permission_id')
                ->references('id')
                ->on('permissions')
                ->onDelete('cascade');
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
        Schema::dropIfExists('course_member_permissions');
    }
}
