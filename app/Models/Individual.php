<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Individual extends Model {


    protected $fillable = [
        'id', 'email', 'first_name', 'last_name', 'password', 'country', 'designation', 'organization', 'accreditation_type', 'passport_number', 'national_id', 'photo_path'
    ];

    public function user()
    {
        return $this->belongsTo(UserAccount::class);
    }
}
