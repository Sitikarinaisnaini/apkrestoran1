<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    protected $table ="Reservation";
    protected $fillable = ['pegawai_id','pelanggan_id','tanggal','jam','meja','menu_id'];

    public function pelanggan(){
        return $this->belongsTo('App\Models\Pelanggan','pelanggan_id');
    }
    public function pegawai(){
        return $this->belongsTo('App\Models\Pegawai','pegawai_id');
    }
    public function menu(){
        return $this->belongsTo('App\Models\Menu','menu_id');
    }
}
