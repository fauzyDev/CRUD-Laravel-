<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gambarbarang extends Model
{
    use HasFactory;
    protected $fillable = ['product_id', 'url'];

    public function galeri()
    {
        return $this->belongsTo(Barang::class, 'product_id', 'id');
    }
}
