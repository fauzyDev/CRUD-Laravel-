<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    // protected $fillable = ['nama_products','harga','deskripsi','stok','category_id'];

    protected $guarded = ['id'];

    public function produk_kategori()
    {
        return $this->belongsTo(Categoribarang::class,'category_id','id');
    }

    public function produk_galeri()
    {
        return $this->hasMany(Gambarbarang::class, 'product_id', 'id');
    }

}
