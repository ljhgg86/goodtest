<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gourmets extends Model
{
    protected $table = "gourmets";
    protected $fillable = [
        'title',
    ];
    public function gourmetinfo(){
        return $this->hasMany('App\Models\Gourmetinfo','gourmets_id','id');
    }
    //get all gourmets
    public function getGourmets(){
        return $this->with('gourmetinfo')
                    ->get();
    }
}
