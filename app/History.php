<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    protected $fillable = ['name', 'sex', 'status', 'nationality', 'religion', 'birthdays', 'address', 'phone', 'graduated', 'branch'];
}
