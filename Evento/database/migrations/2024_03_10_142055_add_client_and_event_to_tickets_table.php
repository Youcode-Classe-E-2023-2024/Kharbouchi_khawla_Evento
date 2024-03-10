<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddClientEventColumnsToTicketsTable extends Migration
{
    public function up()
    {
        Schema::table('tickets', function (Blueprint $table) {
            // Add the columns. You might need to adjust column types based on your database design
            $table->unsignedBigInteger('id_client')->nullable();
            $table->unsignedBigInteger('id_event')->nullable();

            // Setup foreign key constraints
            $table->foreign('id_client')->references('id')->on('clients')->onDelete('set null');
            $table->foreign('id_event')->references('id')->on('events')->onDelete('set null');
        });
    }

    public function down()
    {
        Schema::table('tickets', function (Blueprint $table) {
            // Remove the foreign key constraints first
            $table->dropForeign(['id_client']);
            $table->dropForeign(['id_event']);

            // Then remove the columns
            $table->dropColumn(['id_client', 'id_event']);
        });
    }
}
