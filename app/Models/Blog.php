<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    const PUBLIC = 1;
    const FRIENDS = 2;
    const SPECIFIC_FRIENDS = 3;
    const ONLY_ME = 4;

    protected $fillable =[
            'body',
            'status',
            'visibility',
            'user_id',



    ];

    public function user(){
        return $this->belongsTo(related:User::class);
    }



}


