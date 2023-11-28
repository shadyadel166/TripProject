<?php

 use Illuminate\Database\Migrations\Migration;
 use Illuminate\Database\Schema\Blueprint;
 use Illuminate\Support\Facades\Schema;

 return new class extends Migration
 {
//     /**
//      * Run the migrations.
//      */
     public function up(): void
     {
         Schema::create('trip', function (Blueprint $table) {
             $table->id();
             $table->string("image");
             $table->string("fromCity");
             $table->string("toCity");
             $table->date("date");
            $table->float("price");
            $table->float("seats_availble");
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trip');
    }
};
