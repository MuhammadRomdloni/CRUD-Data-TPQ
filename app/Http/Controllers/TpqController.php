<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tpq;

class TpqController extends Controller
{
    public function index(Request $request)
    {
        $data['title'] = 'Data TPQ Kotaanyar';
        $data['q'] = $request->get('q');
        $data['tpqs'] = Tpq::where('nama_tpq', 'like', '%' . $data['q'] . '%')->get();
        return view('tpqs.index', $data);
    }

    public function create()
    {
        $data['title'] = 'Input TPQ';
        return view('tpqs.create', $data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'no' => 'required',
            'nama_tpq' => 'required',
            'no_tpq' => 'required',
            'alamat' => 'required',
            'ketua' => 'required',
            'hp' => 'required',
        ]);

        $tpq = new Tpq($request->all());
        $tpq->save();
        return redirect('tpqs')->with('success', 'Data Berhasil ditambah');
    }

    public function edit(Tpq $tpq)
    {
        $data['title'] = 'Edit TPQ';
        $data['tpqs'] = $tpq;
        return view('tpqs.edit', $data);
    }

    public function update(Request $request, Tpq $tpq)
    {
        $request->validate([
            'no' => 'required',
            'nama_tpq' => 'required',
            'no_tpq' => 'required',
            'alamat' => 'required',
            'ketua' => 'required',
            'hp' => 'required',
        ]);

        $tpq->no = $request->no;
        $tpq->nama_tpq = $request->nama_tpq;
        $tpq->no_tpq = $request->no_tpq;
        $tpq->alamat = $request->alamat;
        $tpq->ketua = $request->ketua;
        $tpq->hp = $request->hp;
        $tpq->save();
        return redirect('tpqs')->with('success', 'Data Berhasil di ubah');
    }

    public function destroy(Tpq $tpq)
    {
        $tpq->delete();
        return redirect('tpqs')->with('success', 'Brthasil di hapus');
    }
}
