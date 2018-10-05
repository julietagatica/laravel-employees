<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Title extends Model
{
    protected $primaryKey = ['emp_no','title','from_date']; 
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;
    protected $fillable = ['title'];

    public function employees(){
        return $this->belongsTo('App\Employee', 'emp_no','emp_no');
    }
}
