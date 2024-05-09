<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    use HasFactory;


    //select table name
    protected $table = 'posts';

    //rename default id dupa cum se numeste
    protected $primaryKey='post_id';

    protected $fillable=[
        'project_id', 'title', 'category'
    ];

    

}
