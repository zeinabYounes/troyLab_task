<?php

namespace App;
// use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class School extends Model
{
  // use HasFactory;

  use SoftDeletes;

  public $fillable = ["name","status"];

    protected $table = 'schools';
    public $timestamps = false;
    public function orders()
     {
       return $this->hasMany('App\Order');
     }
}
