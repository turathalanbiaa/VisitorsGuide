<?php

namespace App\Http\Controllers\Api;
use App\Models\VisitorReception;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\VisitorsReception As VisitorsReceptionResource;

class VisitorsReceptionController extends Controller
{
    public function search(Request $request)
    {
        if ($request->search == '' && $request->type == '') {
            $receptions = VisitorReception::paginate(10);
            return VisitorsReceptionResource::collection($receptions);
        }
        elseif ($request->type == '') {
            $receptions = VisitorReception::search($request->search)->paginate(10);
            return VisitorsReceptionResource::collection($receptions);
        }
        else {
            $receptions = VisitorReception::where('persons_type', $request->type)->paginate(10);
            return VisitorsReceptionResource::collection($receptions);
        }
        return response($receptions, 200);

    }
}
