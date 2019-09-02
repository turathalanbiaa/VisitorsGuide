<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\Lost As LostResource;
use App\Models\Lost;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LostController extends Controller
{
    public function index(Request $request)
    {
        if ($request->search == '' && $request->category == '') {
            $Losts = Lost::orderBy('id', 'desc')->paginate(10);
            return LostResource::collection($Losts);
        }
        elseif ($request->category == '') {
            $Losts = Lost::search($request->search)->orderBy('id', 'desc')->paginate(10);
            return LostResource::collection($Losts);
        }
        else {
            $Losts =Lost::with('center')->where('category', $request->category)->orderBy('id', 'desc')->paginate(10);
            return LostResource::collection($Losts);
        }
        return response($Losts, 200);
    }
}
