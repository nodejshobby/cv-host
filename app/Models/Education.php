<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;

    protected $fillable=['cv_id','school_name','school_location','degree','field_of_study','start_date','end_date'];

    public function CV(){
        return $this->belongsTo(CV::class,'cv_id');
     }
}
