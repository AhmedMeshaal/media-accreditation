<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Individual extends Model {

    use HasFactory;

    protected $fillable = [
        'id', 'first_name', 'last_name', 'country', 'designation', 'organization', 'passport_number', '	national_id', 'photo_path'
    ];
}
