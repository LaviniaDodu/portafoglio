<?php

use App\Models\Tag;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tags', function (Blueprint $table) {
            $table->id();
            $table->string('name'); 
            $table->timestamps();
        });

        $tags = [
            'HTML5', 'CSS3', 'Bootstrap', 'Javascript', 'Vue.js', 'PHP', 'Laravel', 'MySQL', 'Dropzone', 'TaleWind', 'Scout', 'Spatie', 'Horizon', 'Vanilla.js', 'Nginx', 'Google API', 'Digital Ocean', 'Forge', 'Horizon', 'Laravel New'
        ];

        foreach($tags as $tag) {
            $t = new Tag(); 
            $t->name = $tag; 
            $t->save(); 
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tags');
    }
}
