<?php namespace Crazy\PusherChat\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

/**
 * CreateMessagesTable Migration
 */
class CreateMessagesTable extends Migration
{
    public function up()
    {
        Schema::create('crazy_pusherchat_messages', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->default(0);
            $table->integer('chat_id')->default(0);
            $table->text('message')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('crazy_pusherchat_messages');
    }
}
