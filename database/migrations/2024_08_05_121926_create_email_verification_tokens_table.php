<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmailVerificationTokensTable extends Migration
{
    public function up()
    {
        Schema::create('email_verification_tokens', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('token')->unique();
            $table->timestamp('created_at')->useCurrent();
            $table->dateTime('expires_at');
        });
    }

    public function down()
    {
        Schema::dropIfExists('email_verification_tokens');
    }
}

