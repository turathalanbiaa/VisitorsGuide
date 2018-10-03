<?php

namespace App\Http\Controllers\Api;
use App\Models\VisitorReception;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\VisitorsReception As VisitorsReceptionResource;

class VisitorsReceptionController extends Controller
{
    public function index(Request $request)
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
    function dashboard_index(Request $request){
        $receptions = VisitorReception::where('user_id',$request->user_id)->paginate(10);
        return VisitorsReceptionResource::collection($receptions);
    }

    public function store(Request $request)
    {
        $visitorReception = VisitorReception::create($request->all());
        return new VisitorsReceptionResource($visitorReception);
    }

    public function update(Request $request)
    {
        $visitorReception = VisitorReception::findOrFail($request->input('id'));
        $visitorReception->update($request->all());
        return new VisitorsReceptionResource($visitorReception);
    }


    public function destroy($id)
    {
        $visitorReception = VisitorReception::findOrFail($id);
        $visitorReception->delete();
        return new VisitorsReceptionResource($visitorReception);
    }
}
