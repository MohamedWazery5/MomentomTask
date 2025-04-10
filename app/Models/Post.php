<?php

namespace App\Models;

use App\Models\Tag;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory ,SoftDeletes;
    protected $table= 'posts';
    protected $fillable= [
        'title',
        'content',
        'image',
        'user_id',
    ];
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
}
