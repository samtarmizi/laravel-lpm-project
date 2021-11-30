<?php

namespace App\Http\Controllers\Ejen;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Permohonan;

class PermohonanController extends Controller
{
    public function index()
    {
        // list all authenticate permohonan
        // $senarai_permohonan = auth()->user()->permohonan()->paginate();
        $senarai_permohonan = Permohonan::paginate();

        return view('ejen.permohonan.index', compact('senarai_permohonan'));
    }

    public function create()
    {
        // show permohonan create form

        return view('ejen.permohonan.create');
    }

    public function store(Request $request)
    {
        $permohonan = new Permohonan();
        $permohonan->user_id = auth()->user()->id;
        $permohonan->save();

        return redirect()->to('/ejen/senarai-permohonan');
    }
}
