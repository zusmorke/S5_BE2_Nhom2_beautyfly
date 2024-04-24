<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class News extends Model
{
    
    use HasFactory;
    
    protected $table = 'news';
    public $primaryKey = 'id';
    protected $fillable =[
        'title','image_url','description', 'content'
    ];
}
