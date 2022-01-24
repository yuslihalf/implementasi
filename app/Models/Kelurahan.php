<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelurahan extends Model
{
    protected $table = 'ec_subdistricts';
    protected $primarykey = 'subdis_id';

    protected function customer(){
        return $this->HasMany(Customer::class);
    }

    protected function kecamatan(){
        return $this->BelongsTo(Kecamatan::class);
    }

    //use HasFactory;
}
