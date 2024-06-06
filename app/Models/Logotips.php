<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logotips extends Model
{
    use HasFactory;

    protected $fillable = [
       
        'user_id',
        'back',
        'title',
        'font',
        'color',
        'size',
        'image_path',
    ];
    

    

    public function user() {
        return $this->belongsTo(related:User::class);
    }
}
