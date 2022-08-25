<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Complaints extends Model
{
    use HasFactory;
    protected $fillable =[
        'name',
        'location',
        'value',
        'onRead'
    ];

    public function scopeFilter($query, $id){
        $query->when($id ?? null, function($query, $id){
            $query->find($id);
        });
    }
}
