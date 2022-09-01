<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComplaintImages extends Model
{
    use HasFactory;

    protected $fillable=[
        'images'
    ];

    public function complaint(){
        return $this->belongsTo(Complaints::class);
    }
}
