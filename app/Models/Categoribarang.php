<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoribarang extends Model
{
    use HasFactory;
    protected $fillable = ['nama_category'];

    public function barang()
    {
        return $this->hasMany(Barang::class,'category_id','id');
    }
}
