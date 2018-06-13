<?php

namespace App\AdminModel;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable=['body','title','url'];
}
