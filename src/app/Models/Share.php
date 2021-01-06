<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Share extends Model
{
    protected $table = 'share';
    public $timestamps = false;
    protected $fillable =['id', 'user_id','user_pseudo','image_id', 'path', 'author'];
}