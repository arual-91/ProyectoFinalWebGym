<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table='product';

    protected $fillable = [
        'name',
        'description',
        'price',
        'image'
    ];

    public function encontrar($id){
        return $this->where('id', $id)->first();
    }

    
}
