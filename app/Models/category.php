<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;
    protected $table = 'categories';
    protected $filable = [
        'category_name',
        'status',
        'title',
        'content',
        'keyword',
    ];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
