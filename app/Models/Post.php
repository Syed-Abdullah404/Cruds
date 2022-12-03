<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    // protected $table ="posts";
    // protected $fillable = [
    //     'title',
    //     'body',
    //     'image',
    //     'user_id',
    //     'username'
    // ];
    
    protected $guarded  = [];   //work for all column



    public function user()
    {
        return $this->belongsTo(User::class);
    }
  
}
