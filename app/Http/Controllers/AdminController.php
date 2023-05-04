<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;
use App\Models\Pelanggan;
use App\Models\Menu;
use App\Models\Reservation;
use Illuminate\Support\Carbon;


class AdminController extends Controller
{
     public function dashboard (){
       $pegawai = Pegawai::count();
       $pelanggan = Pelanggan::count();
       $menu = Menu::count();
       $reservation = Reservation::count();
       $groupReservation = Reservation::all()->groupBy(function($val) {
        return Carbon::parse($val->tanggal)->format('F');
       });
       //dd( $groupReservation);
       return view ('admin.dashboard', compact('pegawai','pelanggan','menu','reservation','groupReservation'));
       
    }
}
