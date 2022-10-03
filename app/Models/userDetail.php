<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userDetail extends Model
{
    use HasFactory;

    protected $fillable = ['cv_id','firstname','lastname','email','state','city','country','postal_code','profession'];

    public function CV(){
       return $this->belongsTo(CV::class,'cv_id');
    }
}
