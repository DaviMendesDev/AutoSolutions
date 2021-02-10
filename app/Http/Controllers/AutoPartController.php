<?php

namespace App\Http\Controllers;

use App\Models\AutoPart;
use App\Models\AutoModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\AutoPartBuy;
use App\Models\AutoBrand;
use AutoModels;

class AutoPartController extends Controller
{
    public function getAutoPart (int $autopart_id) {
        $autopart_model = AutoPart::getAutoPartJoinedData($autopart_id)->first();

        return view('auto-part-show', [
            'autopart_model' => $autopart_model
        ]);
    }

    public function buyAutoPart (int $autopart_id) {
        $messages = request()->input('messages');
        $email = request()->input('email');
        $autopart_model = AutoPart::getAutoPartJoinedData($autopart_id)->first();

        // Mail::to($email)->queue(new AutoPartBuy(
        //     autopart_model: $autopart_model,
        //     email: $email,
        //     message: $message
        // ));

        Mail::to(config('mail.from.address'))->send(new AutoPartBuy(
            autopart_model: $autopart_model,
            email: $email,
            messages: $messages
        ));

        return redirect()->route('home')
                ->with('message', 'Email sent successfully')
                ->with('message_type', 'success');
    }

    public function apiGetAutoParts () {
        $autoparts = AutoPart::getImportantsJoinedAutoPartsData()->paginate(10);
        return response()->json([
            'autoparts' => $autoparts
            ]);
    }

    public function searchForAutoParts () {
        $searchValue = request()->input('search_parts');
        $searchValue = strtolower($searchValue);

        $autoparts = AutoPart::getImportantsJoinedAutoPartsData()
                        ->where('auto_parts.part_name', 'LIKE', '%' . $searchValue . '%');
        $models = AutoModel::where('model_name', 'LIKE', '%' . $searchValue . '%');
        $brands = AutoBrand::where('brand_name', 'LIKE', '%' . $searchValue . '%');

        if(request()->ajax()) {
            $autoparts = $autoparts->limit('3')->get();
            $models = $models->limit('3')->get();
            $brands = $brands->limit('1')->get();

            return response()->json([
                'autoparts' => $autoparts,
                'models' => $models,
                'brands' => $brands,
            ]);
        } else {
            session()->flashInput(request()->input());

            return view('show-search-results', [
                'autoparts' => $autoparts->get(),
                'models' => $models->get(),
                'brands' => $brands->get(),
            ]);
        }
    }
}
