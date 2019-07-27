 <?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAddressToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->unsignedBigInteger('country_id')->nullable();
            $table->unsignedBigInteger('state_id')->nullable();
            $table->unsignedBigInteger('city_id')->nullable();
            $table->integer('zone')->nullable();
            $table->string('street')->nullable();
            $table->string('avenue')->nullable();
            /*$table->foreign('country_id')
                  ->references('id')->on('countries');
            $table->foreign('state_id')
                  ->references('id')->on('states');
            $table->foreign('city_id')
                  ->references('id')->on('cities');*/
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //

            /*$table->dropForeign(['country_id']);
            $table->dropForeign(['state_id']);
            $table->dropForeign(['city_id']); */
            $table->dropColumn('country_id');
            $table->dropColumn('state_id');
            $table->dropColumn('city_id');
            $table->dropColumn('zone');
            $table->dropColumn('street');
            $table->dropColumn('avenue');
        });
    }
}
