<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EarlyAccessLead extends Model
{
    protected $fillable = ['email', 'source'];
}
