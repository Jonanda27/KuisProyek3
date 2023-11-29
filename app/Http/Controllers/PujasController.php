<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Kasir;
use App\Models\Tenan;
use Illuminate\Http\Request;

class PujasController extends Controller
{
    public function tambahdatabarang() {
        $data = Barang::all();
        return view('DataBarang', compact('data'));
    }
    public function insertdatabarang(Request $request) {
        Barang::create([
            'kodebarang' => $request->kodebarang,
            'namabarang' => $request->namabarang,
            'satuan' => $request->satuan,
            'hargasatuan' => $request->hargasatuan,
            'stok' => $request->stok,
        ]);
        return redirect()->route('tambahdatabarang')->with('success', 'Data Berhasil di Simpan');
    }

    // public function editdatabarang($id){
    //     $data = Barang::find($id);
    //     return view('EditDataBarang', compact('data'));
    // }

    public function editdatabarang($id){
        $data = Barang::find($id);

        if (!$data) {
            return redirect()->route('tambahdatabarang')->with('error', 'Data tidak ditemukan');
        }

        return view('EditDataBarang', compact('data'));
    }


    // public function updatedatabarang(Request $request, $id) {
    //     $data = Barang::find($id);
    //     $data->update($request->all());
    //     return redirect()->route('tambahdatabarang', ['id' => $id])->with('success', 'Data Berhasil di Simpan');
    // }

    public function updatedatabarang(Request $request, $id) {
        $data = Barang::find($id);
        $data->update($request->all());
        return redirect()->route('tambahdatabarang')->with('success', 'Data Berhasil di Simpan');
    }


    public function deletebarang($id){
        $data = Barang::find($id);
        $data->delete();
        return redirect()->route('tambahdatabarang')->with('success', 'Data berhasil dihapus');
    }


    public function tambahdatakasir() {
        $data = Kasir::all();
        return view('DataKasir', compact('data'));
    }
    public function insertdatakasir(Request $request) {
        // Validate the incoming request data
        $request->validate([
            'kodekasir' => 'required',
            'nama' => 'required',
            'hape' => 'required',
        ]);

        // Insert data into the kasirs table
        Kasir::create([
            'kodekasir' => $request->kodekasir,
            'nama' => $request->nama,
            'hape' => $request->hape,
        ]);

        return redirect()->route('tambahdatakasir')->with('success', 'Data Berhasil di Simpan');
    }


    public function tambahdatatenan() {
        $data = Tenan::all();
        return view('DataTenan', compact('data'));
    }
    public function insertdatatenan(Request $request) {
        // Validate the incoming request data
        $request->validate([
            'kodekasir' => 'required',
            'nama' => 'required',
            'hape' => 'required',
        ]);

        // Insert data into the kasirs table
        Kasir::create([
            'kodekasir' => $request->kodekasir,
            'nama' => $request->nama,
            'hape' => $request->hape,
        ]);

        return redirect()->route('tambahdatatenan')->with('success', 'Data Berhasil di Simpan');
    }
}
