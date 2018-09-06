<?php

namespace App\Http\Controllers\Api;

use App\Models\Lost;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LostController extends Controller
{
    public function search(Request $request)
    {
        if ($request->search == '' && $request->category == '') {
            $Losts = Lost::with('center')->paginate(10);
        } elseif ($request->category == '') {
            $Losts = Lost::search($request->search)->paginate(10);
            foreach ($Losts as $Lost)
                $Losts->concat($Lost->center);
        } else {
            $Losts = Lost::search($request->search)->where('category', $request->category)->paginate(10);

            foreach ($Losts as $Lost)
                $Losts->concat($Lost->center);
        }
        return response($Losts, 200);
    }
}
