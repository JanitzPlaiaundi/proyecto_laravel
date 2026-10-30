<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'product_id',
        'user_address',
        'price',
    ];

    /**
     * Conversión automática de tipos de atributos (Casting).
     * Garantiza que Laravel devuelva estos valores con su tipo de dato nativo en PHP.
     */
    protected $casts = [
        'price' => 'decimal:2',
        'user_id' => 'integer',
        'product_id' => 'integer',
        'user_address' => 'string',
    ];
}
