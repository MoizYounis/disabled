<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddOwnerIdInServiceRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('service_requests', function (Blueprint $table) {
            $table->bigInteger('owner_id')->unsigned()->after('id')->nullable();
            $table->boolean('is_approved')->default(0);
            $table->foreign('owner_id')->references('id')->on('users');
        });

        Schema::table('product_requests', function (Blueprint $table) {
            $table->bigInteger('owner_id')->unsigned()->after('id')->nullable();
            $table->boolean('is_approved')->default(0);
            $table->foreign('owner_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('service_requests', function (Blueprint $table) {
            $table->dropForeign(['owner_id']);
            $table->dropColumn('owner_id');
            $table->dropColumn('is_approved');
        });

        Schema::table('product_requests', function (Blueprint $table) {
            $table->dropForeign(['owner_id']);
            $table->dropColumn('owner_id');
            $table->dropColumn('is_approved');
        });
    }
}
