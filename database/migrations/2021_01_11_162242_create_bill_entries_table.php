<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillEntriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bill_entries', function (Blueprint $table) {
            $table->bigIncrement('id');
            $table->string('serial');
            $table->string('account');
            $table->string('amount');
            $table->string('month');
            $table->string('year');
            $table->string('address'); 
            $table->string('phone'); 
            $table->string('status');
            $table->string('comment');
            $table->string('last_date');
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
        Schema::dropIfExists('bill_entries');
    }
}
