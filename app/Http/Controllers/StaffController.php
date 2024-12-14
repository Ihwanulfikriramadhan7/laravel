<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Staff;
use App\Http\Resources\ResponsResource;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //       
        $staff = Staff::all();
        return view('staff.index', compact('staff'));
        // return view('staff.index');

    }
                public function apiStaff(){
                    $staff = Staff::all();
                    return new ResponsResource(true,'Melihat data staff',$staff);
                    // return response()->json(
                    //     [
                    //         'success' => true,
                    //         'message' => 'Melihat data staff',
                    //         'data' => $staff
                    //     ],200);
                }

                public function apiStaffDetail($id){
                    $staff = Staff::find($id);
                    if($staff){
                        return response()->json(
                            [
                                'success' => true,
                                'message' => 'Melihat detail staff',
                                'data' => $staff
                            ]
                            );
                    }else{
                        return response()->json(
                            [
                                'success' => false,
                                'message' => 'Staff tidak ditemukan',                 
                            ], 404);
                    }
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
