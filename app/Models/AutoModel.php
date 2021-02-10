<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AutoModel extends Model
{
    use HasFactory;

    protected $table = 'auto_models';

    public function getAutoParts() {
        return $this->hasMany(AutoPart::class, 'auto_model_id');
    }
}
