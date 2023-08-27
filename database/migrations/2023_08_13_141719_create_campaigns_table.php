<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCampaignsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('campaigns', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('title');
            $table->unsignedBigInteger('child_id');
            $table->date('start_date');
            $table->date('end_date');
            $table->decimal('goal_amount', 10, 2);
            $table->text('description');
            $table->timestamps();

            $table->foreign('child_id')->references('id')->on('children');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('campaigns');
    }
};
