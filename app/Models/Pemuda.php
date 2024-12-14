<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Pemuda extends Model
{
    //
    use HasFactory;
    //
    protected $table = 'pemuda';
    protected $fillable = ['nip', 'name', 'alamat', 'email'];
    public $timestamps = false;
    
}
