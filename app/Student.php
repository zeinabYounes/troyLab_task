<?php

namespace App;
// use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
  // use HasFactory;

  use SoftDeletes;
   public $fillable = ["name","order_id","school_id"];
    protected $table = 'students';
    public $timestamps = false;
    public function order()
     {
       return $this->belongsTo('App\Order','order_id');
     }
     public function school()
      {
        return $this->belongsTo('App\School','school_id');
      }
}
