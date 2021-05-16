<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Project extends Model
{
    use HasFactory;

    //users, images, categories, tags 

    protected $fillable = [
        'title', 'slug', 'body', 'user_id', 'category_id', 'img'
    ];

    public function user()
    {
        return $this->belongsTo(User::class); 
    } 

    public function images()
    {
        return $this->hasMany(Image::class); 
    } 

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function getCover() 
    {
         // ritorniamo la prima immagine associata al articolo 
        // se non c'e l'ha , ritorniamo l'immagine di default 
        $img = $this->images->first(); 
        if($img == null) {
            return Storage::url('public/default/default.png');  
        } else {
            return Storage::url($img->file); 
        } 
    }
    
}
