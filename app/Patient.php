<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class patient extends Model
{
    protected $fillable = [
        'first_name', 'last_name', 'date_of_birth', 'place_of_birth', 'email', 'sex', 'blood_group', 'contact','address',
         'education_level','area_of_intrest','undergone_training'

    ];

    public function father()
    {
        return $this->belongsTo(Father::class);
    }

    public function mother()
    {
        return $this->belongsTo(Mother::class);
    }
}
