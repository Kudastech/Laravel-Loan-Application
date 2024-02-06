<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('newrequests', function (Blueprint $table) {
            $table->id();
            $table->string('lamount');
            $table->string('refnumber');
            $table->string('ltype');
            $table->string('lplan');
            $table->string('lpurpose');
            $table->string('payment_status');
            $table->string('user_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('newrequests');
    }
};
