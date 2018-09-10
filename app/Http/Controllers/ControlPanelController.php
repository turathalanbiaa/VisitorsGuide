<?php

namespace App\Http\Controllers;

use App\Enums\MajlesStatus;
use App\Models\Majales;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class ControlPanelController extends Controller
{
    //Management Majales
    public function managementMajales() {
        $majales = Majales::where("status", MajlesStatus::NO_ACTIVE)
            ->orderBy("id", "AES")
            ->get();

        return view("CP.majales")->with([
            "majales" => $majales
        ]);
    }

    public function activeMajles() {
        $id = Input::get("id");
        $majles = Majales::find($id);
        if ($majles) {
            $majles->status = MajlesStatus::ACTIVE;
            $success = $majles->save();

            if ($success)
                return ["success" => "true"];
            else
                return ["success" => "false"];
        }

        return ["majles" => "NotFound"];
    }

    public function rejectMajles() {
        $id = Input::get("id");
        $majles = Majales::find($id);

        if ($majles) {
            $majles->status = MajlesStatus::REJECT;
            $success = $majles->save();
            if ($success)
                return ["success" => "true"];
            else
                return ["success" => "false"];
        }

        return ["majles" => "NotFound"];
    }

    public function deleteMajles() {
        $id = Input::get("id");
        $majles = Majales::find($id);

        if ($majles) {
            $success = $majles->delete();
            if ($success)
                return ["success" => "true"];
            else
                return ["success" => "false"];
        }

        return ["majles" => "NotFound"];
    }
}
