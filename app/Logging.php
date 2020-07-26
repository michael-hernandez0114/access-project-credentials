<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Logging extends Model
{
    protected $fillable = [
        'user_id',
        'project',
        'service',
        'username'
    ];
}
