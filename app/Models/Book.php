<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected #fillable = ['user_id','title', 'description', 'slug' 'cover', 'price', 'discount'];

public function genres()
{
    return $this->belongsToMany(Genre::class);
}
public function authors()
{
    return $this->belongsToMany(Author::class);
}
public function user()
{
    return $this->belongsToMany(User::class);
}

}
