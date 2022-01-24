<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provinsi extends Model
{
    protected $table = 'ec_provinces';
    protected $primarykey = 'prov_id';

    protected function kota(){
        return $this->HasMany(Kota::class);
    }

    //use HasFactory;
}
