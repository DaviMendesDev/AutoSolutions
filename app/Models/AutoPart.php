<?php

namespace App\Models;

use Database\Factories\AutoPartsFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AutoPart extends Model
{
    use HasFactory;

    protected $table = 'auto_parts';

    protected static function newFactory()
    {
        return AutoPartsFactory::new();
    }

    public static function getImportantsJoinedAutoPartsData () {
        return AutoPart::join('auto_models', 'auto_parts.auto_model_id', '=', 'auto_models.id')
                       ->join('auto_brands', 'auto_models.auto_brand_id', '=', 'auto_brands.id')
                       ->select('auto_parts.*', 'auto_models.model_name', 'auto_models.release_date', 'auto_brands.brand_name');
    }

    public static function getAutoPartJoinedData ($autopart_id) {
        return AutoPart::getImportantsJoinedAutoPartsData()
                        ->where('auto_parts.id', $autopart_id);
    }
}
