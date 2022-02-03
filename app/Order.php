<?php

namespace App;
// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
  // use HasFactory;
  use SoftDeletes;
  public $fillable = ["student_name","status","school_id"];

    protected $table = 'orders';
    public function school()
    {
      return $this->belongsTo('App\School', 'school_id');
    }
}
