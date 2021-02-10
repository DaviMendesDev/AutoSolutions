<?php

namespace App\Http\Controllers;

use App\Models\AutoBrand;
use Illuminate\Http\Request;

class AutoBrandController extends Controller
{
    public function getAutoBrand($autobrand_id) {
        $autobrand = AutoBrand::find($autobrand_id);
        $automodels = $autobrand->getAutoModels()->get();

        return view('auto-brand-show', [
            'autobrand' => $autobrand,
            'automodels' => $automodels,
        ]);
    }
}
