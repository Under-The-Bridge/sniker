<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Thumbnail;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Post extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function thumbnail()
    {
        return $this->belongsTo(Thumbnail::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
