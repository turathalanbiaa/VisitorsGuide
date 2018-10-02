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
        if ($request->search == '' && $request->tag == '') {
            $Losts = Lost::paginate(10);
            return LostResource::collection($Losts);
        }
        elseif ($request->category == '') {
            $Losts = VisitorReception::search($request->search)->paginate(10);
            return LostResource::collection($Losts);
        }
        else {
            $Losts = VisitorReception::with('center')->where('category', $request->tag)->paginate(10);
            return LostResource::collection($Losts);
        }
        return response($Losts, 200);
    }
    function store(Request $request)
    {
        $lost = Lost::create($request->all());
        return new LostResource($lost);
    }

}
