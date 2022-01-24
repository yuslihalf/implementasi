<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kota extends Model
{
    protected $table = 'ec_cities';
    protected $primarykey = 'city_id';

    protected function kecamatan(){
        return $this->HasMany(Kecamatan::class);
    }

    protected function provinsi(){
        return $this->BelongsTo(Provinsi::class);
    }

    //use HasFactory;
}
