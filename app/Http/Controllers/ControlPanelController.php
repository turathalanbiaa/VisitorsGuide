<?php

namespace App\Http\Controllers;

use App\Enums\MajlesStutas;
use App\Models\Majales;
use Illuminate\Http\Request;

class ControlPanelController extends Controller
{
    public function managementMajales() {
        $majales = Majales::where("active", MajlesStutas::NO_ACTIVE)
            ->orderBy("id", "AES")
            ->get();

        return view("CP.majales")->with([
            "majales" => $majales
        ]);
    }
}
