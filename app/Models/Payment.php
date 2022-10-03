<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable =['name','status','amount','pay_date','cv_id'];

    public function CV(){
        return $this->belongsTo(CV::class,'cv_id');
     }
}
