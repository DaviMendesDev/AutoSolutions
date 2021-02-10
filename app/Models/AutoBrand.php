<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AutoBrand extends Model
{
    use HasFactory;

    protected $table = 'auto_brands';

    public function getAutoModels() {
        return $this->hasMany(AutoModel::class, 'auto_brand_id');
    }
}
