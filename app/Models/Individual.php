<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Individual extends Model {


    protected $fillable = [
        'id', 'email', 'name', 'password', 'country', 'designation', 'organization', 'accreditation_type', 'passport_number', 'national_id', 'photo_path', 'status', 'approvedBy', 'CREATED_AT', 'UPDATED_AT'
    ];

    protected $table = 'individual';
    protected $primaryKey = 'id';

    public $timestamps = true;

}

