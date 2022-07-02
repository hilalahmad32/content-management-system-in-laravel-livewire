<?php

namespace App\Models;

use App\Models\category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function categorys()
    {
        return  $this->belongsTo(category::class, 'cat_id');
    }
}
