<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $table = 'courses';

    public function category()
    {
       return $this->belongsTo('App\Models\Category');
    }

    public function instructor()
    {
       return $this->belongsTo('App\Models\Instructor');
    }
    public function technology()
    {
       return $this->belongsTo('App\Models\Technology');
    }

    public function enquiry()
    {
       return $this->hasOne('App\Models\Enquiry');
    }
}
