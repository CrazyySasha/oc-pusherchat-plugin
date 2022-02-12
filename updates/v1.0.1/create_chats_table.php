<?php namespace Crazy\PusherChat\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

/**
 * CreateChatsTable Migration
 */
class CreateChatsTable extends Migration
{
    public function up()
    {
        Schema::create('crazy_pusherchat_chats', function (Blueprint $table) {
            $table->increments('id');
            $table->string('message');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('crazy_pusherchat_chats');
    }
}
