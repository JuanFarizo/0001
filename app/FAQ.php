<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FAQ extends Model
{
    public $table = "faq";
    public $primaryKey = "id";
    
    public $guarded = [];

    
}
