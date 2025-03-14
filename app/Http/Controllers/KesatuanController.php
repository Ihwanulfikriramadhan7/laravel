<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kesatuan;
use App\Http\Resources\ResponsResource;
use Illuminate\Support\Facades\DB;
class KesatuanController extends Controller
{
    //
    public function index(){
        $kesatuan = DB::table('kesatuan')->get();
        return new ResponsResource(true,'kesatuan.index',$kesatuan);
    }
}
