<?php namespace App;
use Illuminate\Database\Eloquent\Model;


class category extends model {
    protected $table="categories";
    protected $fillable=array('name');
   
    protected $hidden=[
        'id',
        'created_at',
        'updated_at'];

    public function Category(){
        return $this->hasMany('App\Jobs');
    }
    }