<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'posts';
    public $timestamps = true;
    public $incrementing = true;
    protected $fillable = [
       'title',
       'autor',
       'contenido'
    ];
}
