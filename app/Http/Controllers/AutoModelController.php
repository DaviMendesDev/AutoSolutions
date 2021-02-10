<?php

namespace App\Http\Controllers;

use App\Models\AutoModel;
use Illuminate\Http\Request;

class AutoModelController extends Controller
{
    public function getAutoModel($automodel_id) {
        $automodel = AutoModel::find($automodel_id);
        $autoparts = $automodel->getAutoParts()->get();

        return view('auto-model-show', [
            'automodel' => $automodel,
            'autoparts' => $autoparts,
        ]);
    }
}
