<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkHistory extends Model
{
    use HasFactory;

    protected $fillable=['cv_id','job_title','employer','city','country','start_date','end_date'];
}
