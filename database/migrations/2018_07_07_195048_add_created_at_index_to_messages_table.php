<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCreatedAtIndexToMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('messages', function (Blueprint $table) {
            //$table->index('created_at','my_created_at_idx')
            $table->index('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('messages', function (Blueprint $table) {
            //La convencion es:nombreTabla_nombreIndice_index
            //En caso contrario 
            //$table->dropIndex('my_created_at_idx')
            $table->dropIndex('messages_created_at_index');

        });
    }
}
