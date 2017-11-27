<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('site_name') ;
            $table->string('site_facebook')->nullable() ;
            $table->string('site_linkedin')->nullable() ;
            $table->string('site_twitter')->nullable() ;
            $table->string('site_instagram')->nullable() ;
            $table->string('home_title') ;
            $table->string('home_meta')->nullable() ;
            $table->string('blog_title') ;
            $table->string('blog_meta')->nullable() ;
            $table->string('google_analytics') ;
            $table->string('contact_number');
            $table->string('contact_email') ;
            $table->string('google_maps_api') ;
            $table->string('address') ;
            $table->string('copyright') ;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settings');
    }
}
