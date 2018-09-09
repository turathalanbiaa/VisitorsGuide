<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\Lost As LostResource;
use App\Models\Lost;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LostController extends Controller
{
    public function search(Request $request)
    {
        if ($request->search == '' && $request->category == '') {
            $Losts = Lost::paginate(10);
            return LostResource::collection($Losts);
        }
        elseif ($request->category == '') {
            $Losts = Lost::search($request->search)->paginate(10);
            return LostResource::collection($Losts);
        }
        else {
            $Losts = Lost::with('center')->where('category', $request->category)->paginate(10);
            return LostResource::collection($Losts);
        }
        return response($Losts, 200);

    }
}
