<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonationsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('donations', function (Blueprint $table) {
            $table->id();
            $table->decimal('amount', 10, 2);
            $table->date('donation_date');
            $table->unsignedBigInteger('donor_id');
            $table->unsignedBigInteger('campaign_id');

            $table->foreign('donor_id')->references('id')->on('donors');
            $table->foreign('campaign_id')->references('id')->on('campaigns');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('donations');
    }
};
