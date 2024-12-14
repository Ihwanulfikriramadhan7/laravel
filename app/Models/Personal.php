<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    //
    protected $table = 'personal';

    protected $fillable = [
        'nama', 'nip', 'alamat', 'agama_id', 'kesatuan_id'];
        public $timestamps = false;
}
