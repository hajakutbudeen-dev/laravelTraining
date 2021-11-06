<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enquiry extends Model
{
    use HasFactory;

    protected $table = 'enquiries';

    public function course()
    {
       return $this->belongsTo('App\Models\Course');
    }

    public function degree()
    {
       return $this->belongsTo('App\Models\Degree');
    }

    public function college()
    {
       return $this->belongsTo('App\Models\College');
    }

    public function specialization()
    {
       return $this->belongsTo('App\Models\Specialization');
    }
    
}
