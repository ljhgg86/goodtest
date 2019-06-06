<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gourmetinfo extends Model
{
    protected $table= 'gourmetinfo';
    protected $fillable = [
        'gourmets_id',
        'info',
        'zancounts',
        'pay',
        'opentime',
        'closetime',
        'address',
        'telphone',
        'topimg',
        'latitude',
        'longitude'
    ];
    public function gourmets(){
        return $this->belongsTo('App\Models\Gourmets','gourmets_id');
    }
}
