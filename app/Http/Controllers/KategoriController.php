<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\DataTables\KategoriDataTable;
use App\Models\KategoriModel;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\StorePostRequest;

class KategoriController extends Controller
{
    public function index(KategoriDataTable $dataTable){
        return $dataTable->render('kategori.index');
    }

    public function create(): View{
            return view('kategori.create');
        }

    public function store(StorePostRequest $request): RedirectResponse{
        KategoriModel::create([
            'kategori_kode' => $request->kategori_kode, // Gunakan 'kategori_kode' sesuai dengan name yang Anda berikan pada input
            'kategori_nama' => $request->kategori_nama, // Gunakan 'kategori_nama' sesuai dengan name yang Anda berikan pada input
        ]);
        /*$request->validate([
            'kategori_kode' => 'bail|required|unique:m_kategori|max:10',
            'kategori_nama' => 'required',
        ]);*/

        $validate = $request->validated();

        // Retrieve a portion of the validated input data...
        $validate = $request->safe()->only(['kategori_kode', 'kategori_nama']);
        $validate = $request->safe()->except(['kategori_kode', 'kategori_nama']);
        return redirect('/kategori');
    }

    public function edit($id){
        $kategori = KategoriModel::find($id);
        return view('kategori.edit', ['data' => $kategori]);
    }

    public function store1($id, Request $request){
        $kategori = KategoriModel::find($id);

        $kategori->kategori_kode = $request->kodeKategori;
        $kategori->kategori_nama = $request->namaKategori;

        $kategori->save();

        return redirect('/kategori');
    }

    public function delete($id){
        $kategori = KategoriModel::find($id);
        $kategori->delete();

        return redirect('/kategori');
    }
}


