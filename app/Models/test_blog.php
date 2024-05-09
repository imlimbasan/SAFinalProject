<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class test_blog extends Model
{
    use HasFactory;

    protected $table = 'test_blog';
    protected $primaryKey = 'test_blog_id';
    public $timestamps = false;
}
