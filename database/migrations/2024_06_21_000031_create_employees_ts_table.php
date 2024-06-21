<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees_ts', function (Blueprint $table) {
            $table->integer('id_ets')->primary()->index();
            $table->string('name_ets');
            $table->string('lastname_ets');
            $table->longtext('address_ets');
            $table->string('phonenumber_ets');
            $table->string('emailaddress_ets');
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
        Schema::dropIfExists('employees_ts');
    }
};
