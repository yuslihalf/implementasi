<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customer';
    protected $primarykey = 'id_customer';

    protected $fillable = ['id_customer',
                            'nama',
                            'alamat',
                            'foto',
                            'file_path',
                            'id_kel'
                        ];

    public $timestamps = false;
    
    // use HasFactory;
    protected function kelurahan(){
        return $this->belongsTo(Kelurahan::class,'id_kel','subdis_id');
    }
    //use HasFactory;
}
