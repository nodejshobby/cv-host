<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CV extends Model
{
    use HasFactory;

    protected $table='cvs';

    protected $fillable = [
        'template_id',
        'user_id'
    ];

    public function payment(){
        return $this->hasMany(Payment::class);
    }

    public function userDetail(){
        return $this->hasOne(userDetail::class, 'cv_id');
    }

    public function contactDetail(){
        return $this->hasOne(contactDetail::class, 'cv_id');
    }

    public function Education(){
        return $this->hasMany(Education::class, 'cv_id');
    }

    public function WorkHistory(){
        return $this->hasMany(WorkHistory::class, 'cv_id');
    }

    public function Skill(){
        return $this->hasMany(Skill::class, 'cv_id');
    }

    public function Summary(){
        return $this->hasOne(Summary::class, 'cv_id');
    }

}
