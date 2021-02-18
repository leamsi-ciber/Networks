<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jobs extends Model
{
    use HasFactory;

    protected $fillable = [
        'logo', 
        'Url', 
        'position',
        'address', 
        'description', 
        'apply', 
        'email'
    ];

    public function category(){
        $this->belongsTo('category');
    }

    public function working_id(){
        $this->belongsTo('working_day');
    }
}
