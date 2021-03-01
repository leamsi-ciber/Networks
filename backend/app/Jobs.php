<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jobs extends Model
{
  
  
    protected $fillable = [
        'id_company',
        'workingDay_id',
        'logo', 
        'Url', 
        'position',
        'address', 
        'category_id',
        'description', 
        'apply', 
        'email',
        'job_category'
    ];
     
    protected $hidden = [
        'id',
        'created_at',
        'updated_at'
   ];

    public function category()
    {
        $this->belongsTo('App\category');
    }

    public function working_id(){
        $this->belongsTo('App\working_day');
    }
}
