<?php namespace App;
use Illuminate\Database\Eloquent\Model;


class Jobs extends model {
    protected $table="jobs";
    protected $fillable=array('id_company','workingDay_id','logo','Url','position','address','category_id','description','apply','email','job_category');
   
    protected $hidden=[
        'id',
        'created_at',
        'updated_at'];

    public function Category(){
        return $this->hasMany('App\category');
    }
    }