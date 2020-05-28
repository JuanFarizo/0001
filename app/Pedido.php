<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
   public $table = "pedidos";
   public $primaryKey = "id"; 
   

   public $guarded = [];

   public function usuario() {
    return $this->belongsTo("App\User", "user_id");
    }

    
    protected $casts = [
        'items' => 'collection',
    ];
    
}
