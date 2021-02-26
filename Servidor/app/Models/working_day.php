<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class working_day extends Model
{
    use HasFactory;

    protected $fillable = [
        'type'
    ];

  /*  public function jobs(){
        $this->hasMany('Jobs');
    }*/
}
