<?php

namespace App\Http\Controllers;

use App\Models\AutoPart;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home() {
        $auto_parts = AutoPart::getImportantsJoinedAutoPartsData()->paginate(12);

        return view('home', ['auto_parts' => $auto_parts]);
    }
}
