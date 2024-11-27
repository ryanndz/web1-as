<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Produto extends Model
{   protected $fillable = [
        'name',
        'price',
        'quantity',
        'categoria_id'
      ];

    public function categoria(): BelongsTo{
    return $this->belongsTo(Categoria::class);
    } 
}
