<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\Gedung;
use App\Models\ruangan;
use App\Models\User;

class TestController extends Controller
{
    public function indexGedung()
    {
        $gedungs = Gedung::all();
        return response()->json([
            'success' => true,
            'message' => 'Daftar data gedung',
            'data' => $gedungs
        ], 200);
    }

    public function indexRuangan()
    {
        $ruangan = ruangan::all();
        return response()->json([
            'success' => true,
            'message' => 'Daftar data gedung',
            'data' => $ruangan
        ], 200);
    }

    public function indexUser()
    {
        $user = User::all();
        return response()->json([
            'success' => true,
            'message' => 'Daftar data gedung',
            'data' => $user
        ], 200);
    }

    public function storeGedung(Request $request)
    {
        try {

            $request->validate([
                'nama_gedung' => 'required',
                'status_gedung' => 'required',
                'alamat' => 'required',
            ]);

            $gedung = Gedung::create([
                'nama_gedung' => $request->nama_gedung,
                'status_gedung' => $request->status_gedung,
                'alamat' =>  $request->alamat,

            ]);


            return response()->json([
                'success' => true,
                'message' => 'Daftar data gedung',
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'success' => true,
                'message' => 'Daftar data gedung',
            ], 500);
        }
    }
}
