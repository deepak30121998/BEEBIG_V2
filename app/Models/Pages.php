<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pages extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $fillable = ['title','short_title', 'page_description','user_id','publish', 'meta_description', 'meta_title', 'slug'];


    public function user()
    {
       return $this->belongsTo(User::class);
    }
}
