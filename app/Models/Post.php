<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //  protected $fillable = ['title', 'excerpt', 'body'];

    protected $guarded = ['id'];
    protected $with = ['kategori', 'author'];


    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
