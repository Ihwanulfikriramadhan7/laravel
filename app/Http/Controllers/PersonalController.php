<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Personal;
use Illuminate\Support\Facades\DB;
use App\Http\Resources\ResponsResource;
use Illuminate\Support\Facades\Validator;
class PersonalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        // $personel = DB::table('personal')->get();
        
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
         // validator
         $validator = Validator::make($request->all(), [
            'nama' => 'required|max:45',
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        };

    }
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       
        //
        $personel = Personal::join('agama','agama.id','=','personal.agama_id')->join
        ('kesatuan','kesatuan.id','=','personal.kesatuan_id')
        ->select('personal.nama','personal.nrp','personal.alamat','agama','kesatuan')
        ->where('personel.id', '=', $id)->get();
        return new ResponsResource(true,'Data Personal',$personel);
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
