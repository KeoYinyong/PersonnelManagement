<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    // database/migrations/{timestamp}_add_deleted_at_to_positions_table.php

    public function up()
    {
        Schema::table('positions', function (Blueprint $table) {
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::table('positions', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
    }

};
