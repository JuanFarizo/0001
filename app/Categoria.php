<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    public $table = "categorias";
    public $primaryKey = "id";
    
   public $guarded = [];

    public function productos() {
          return $this->hasMany("App\Producto", "categoria_id");
    }
}
