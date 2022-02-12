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
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('crazy_pusherchat_messages');
    }
}
