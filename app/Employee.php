<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $primaryKey = 'emp_no';
    public $incrementing = false; 
    public $timestamps = false;

    public function titles(){
        return $this->hasMany('App\Title','emp_no','emp_no');
    }

    public function departments(){
        return $this->belongsToMany('App\Department','dept_emp','emp_no','dept_no');
    }
}
