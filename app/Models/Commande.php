<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    use HasFactory;

    protected $fillable=['id','product_id','quantity','date'];

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
