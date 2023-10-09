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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string(column:'fullName',length:100);
            $table->string(column:'email',length:50);
            $table->string(column:'phone',length:50);
            $table->text(column:'message');
            $table->timestamp(column:'created_at')->useCurrent();
            $table->timestamp(column:'updated_at')->useCurrent()->useCurrentOnUpdate();
          
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
