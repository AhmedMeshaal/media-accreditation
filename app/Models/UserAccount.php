<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserAccount extends Model {


    protected $fillable = [
        'individual_id', 'email', 'password', 'date_created'
    ];

    public function individual()
    {
        return $this->hasOne(Individual::class);
    }
}
