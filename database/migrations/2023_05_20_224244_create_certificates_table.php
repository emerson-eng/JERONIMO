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
        Schema::create('certificates', function (Blueprint $table) {
            $table->id();
            $table->string('name_cetpro');
            $table->string('name');
            $table->string('surname_paternal');
            $table->string('surname_maternal');
            $table->string('module');
            $table->integer('average');
            $table->string('cycle');
            $table->integer('hours_module');
            $table->string('resolution');
            $table->string('date_resolution');
            $table->date('start_date_module');
            $table->date('end_date_module');
            $table->longText('capacity1')->nullable();
            $table->longText('capacity2')->nullable();
            $table->longText('capacity3')->nullable();
            $table->longText('capacity4')->nullable();
            $table->longText('capacity5')->nullable();
            $table->longText('capacity6')->nullable();
            $table->longText('capacity7')->nullable();
            $table->longText('capacity8')->nullable();
            $table->string('practice_center');
            $table->integer('hours_practice');
            $table->string('logo')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('certificates');
    }
};
