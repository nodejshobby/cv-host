<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Summary extends Model
{
    use HasFactory;

    protected $fillable = ['cv_id','description'];

    public function CV(){
        return $this->belongsTo(CV::class,'cv_id');
     }
}
