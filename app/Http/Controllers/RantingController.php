<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ranting;

class RantingController extends Controller
{
    public function index() {
        $rantings = Ranting::all();

        $data = [
            "rantings" => $rantings
        ];

        return view("ranting.index", $data);
    }

    public function destroy($id) {
        $ranting = Ranting::where("id", $id)->first();
        $ranting->delete();

        return redirect("/ranting");
    }

    public function create() {
        return view("ranting.tambah");
    }

    public function store(Request $request) {
        $ranting = $request->ranting;
        $keterangan = $request->keterangan;

        $dataRanting = new Ranting();
        $dataRanting->ranting = $ranting;
        $dataRanting->keterangan = $keterangan;
        $dataRanting->save();

        return redirect("/ranting");
    }

    public function edit($id) {
        $ranting = Ranting::where("id", $id)->first();

        $data = [
            "ranting" => $ranting
        ];
        return view("ranting.edit", $data);
    }

    public function update(Request $request, $id) {
        $ranting = $request->ranting;
        $keterangan = $request->keterangan;

        $editRanting = Ranting::where("id", $id)->first();
        $editRanting->ranting = $ranting;
        $editRanting->keterangan = $keterangan;
        $editRanting->save();

        return redirect("/ranting");
    }
}
