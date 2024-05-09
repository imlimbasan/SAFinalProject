<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Webuser extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'password',
        '_token',
    ];

    protected $table = 'webusers';
    protected $primaryKey = 'id';
}
