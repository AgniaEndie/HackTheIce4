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
        Schema::create('status', function (Blueprint $table){
           $table->id('status_id');
           $table->string('status',240);
        });


        Schema::create('role', function (Blueprint $table){
            $table->id('role_id');
            $table->string('role',240);
        });

        Schema::create('users', function (Blueprint $table) {
            $table->id('user_id');
            $table->string('name');
            $table->foreignIdFor(RoleModel::class);
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->integer('reputation');
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('orders', function (Blueprint $table){
           $table->id('order_id');
           $table->string("title",240);
           $table->text('description');
           $table->text('adress');
           $table->text('longtitude');
           $table->text('latitude');
           $table->foreignIdFor(User::class);
           $table->foreignIdFor(StatusModel::class);
           $table->text('commentary');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('status');
        Schema::dropIfExists('users');
        Schema::dropIfExists('role');
        Schema::dropIfExists('status');
    }
};
