<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Tugas;
use Illuminate\Support\Facades\DB;
use App\Http\Resources\ResponsResource;
use FFI;

class TugasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        // $tugas = DB::table('tugas')->get();
        $tugas = Tugas::join('provinsi','provinsi.id','=','tugas.provinsi_id')
        ->join('personel', 'personel.id', '=', 'tugas.personel_id')
        ->join('kesatuan', 'kesatuan.id', '=', 'tugas.kesatuan_id')
        ->select('tugas.no_surat', 'tugas.mulai','tugas_akhir','provinsi.wilayah',
        'personel.nama as personel','pimpinan.nama as pimpinan')->get();
        return new ResponsResource(true,'Data Tugas',$tugas);
    }
     /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
          // $tugas = DB::table('tugas')->get();
          $tugas = Tugas::join('provinsi','provinsi.id','=','tugas.provinsi_id')
          ->join('personel', 'personel.id', '=', 'tugas.personel_id')
          ->join('kesatuan', 'kesatuan.id', '=', 'tugas.kesatuan_id')
          ->select('tugas.no_surat', 'tugas.mulai','tugas_akhir','provinsi.wilayah',
          'personel.nama as personel','pimpinan.nama as pimpinan')->get();
          return new ResponsResource(true,'Data Tugas',$tugas);
      }
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
