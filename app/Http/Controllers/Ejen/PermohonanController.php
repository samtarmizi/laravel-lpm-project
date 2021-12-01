<?php

namespace App\Http\Controllers\Ejen;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Permohonan;
use App\Models\KategoriPermohonan;

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
        // query all kategori permonan

        $senarai_kategori_permohonan = KategoriPermohonan::all();

        // show permohonan create form

        return view('ejen.permohonan.create', compact('senarai_kategori_permohonan'));
    }

    public function store(Request $request)
    {
        $permohonan = new Permohonan();
        $permohonan->user_id = auth()->user()->id;
        $permohonan->kategori_permohonan_id = $request->kategori_permohonan_id;
        $permohonan->save();

        return redirect()->to('/ejen/senarai-permohonan');
    }
}
