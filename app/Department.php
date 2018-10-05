<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $primaryKey = 'dept_no'; 
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false; 

    public function employees(){
        return $this->belongsToMany('App\Employee','dept_emp','dept_no','emp_no');
    }
}
