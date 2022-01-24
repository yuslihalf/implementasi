<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    protected $table = 'ec_districts';
    protected $primarykey = 'dis_id';

    protected function kelurahan(){
        return $this->HasMany(Kelurahan::class);
    }

    protected function kota(){
        return $this->BelongsTo(Kota::class);
    }

    //use HasFactory;
}
