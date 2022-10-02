<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contactDetail extends Model
{
    use HasFactory;

    protected $fillable=['cv_id','phone_number', 'linkedin_page','twitter_page','website'];

}
