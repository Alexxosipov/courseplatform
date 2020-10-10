<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamMemberPermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('team_member_permissions', function (Blueprint $table) {
            $table->unsignedBigInteger('team_member_id');
            $table->unsignedBigInteger('permission_id');
            $table->primary(['team_member_id', 'permission_id']);

            $table->foreign('team_member_id')
                ->references('id')
                ->on('team_members')
                ->onDelete('cascade');

            $table->foreign('permission_id')
                ->references('id')
                ->on('permissions')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('team_member_permissions');
    }
}
