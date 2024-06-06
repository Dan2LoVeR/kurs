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
        Schema::create('logotips', function (Blueprint $table) {
            $table->id();
            $table-> foreignId(column:'user_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamps();
            $table->text(column:'back');
            $table->text(column:'title');
            $table->text(column:'font');
            $table->text(column:'color');
            $table->text(column:'size');
            $table->text(column:'image_path');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('logotips');
    }
};
