<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use App\Models\Pelanggan;
use PDF;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservation = Reservation::with('pelanggan','pegawai','menu')->get();
        //dd($reservasi);
        return view('admin.reservation.index',['reservation'=>$reservation]);
    }
    public function downloadpdf(){
        $reservation = Reservation::all();
        $pdf = PDF::loadview('admin.reservation.export',['reservation' => $reservation])->setOptions(['defaultFont' => 'sans-serif']);
        return $pdf->download('laporan_reservasi.pdf');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.reservation.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          
        $this->validate($request,[
            'pegawai_id'      => 'required',
            'pelanggan_id'     => 'required',
            'tanggal'      => 'required',
            'jam'     => 'required',
            'meja'      => 'required',
            'menu_id'      => 'required'
            ]);

        Reservation::create([
            'pegawai_id'     =>$request->pegawai_id,
            'pelanggan_id'   =>$request->pelanggan_id,
            'tanggal'        =>$request->tanggal,
            'jam'            =>$request->jam,
            'meja'           =>$request->meja,
            'menu_id'        =>$request->menu_id,
        ]);
        return redirect('/reservation');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $reservation = Reservation::find($id);
        return view('admin.reservation.edit', ['reservation' => $reservation]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'pegawai_id'      => 'required',
            'pelanggan_id'     => 'required',
            'tanggal'      => 'required',
            'jam'      => 'required',
            'meja'    => 'required',
            'menu_id'      => 'required'
            
        ]);
        
        $reservation = Reservation::find($id);
            $reservation->pegawai_id = $request->pegawai_id;
            $reservation->pelanggan_id = $request->pelanggan_id;
            $reservation->tanggal= $request->tanggal;
            $reservation->jam = $request->jam;
            $reservation->meja = $request->meja;
            $reservation->menu_id = $request->menu_id;

        $reservation->save();

        return redirect('/reservation');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reservation = Reservation::find($id);
        $reservation->delete();

        return redirect()->back();
    }
    
    public function search(Request $request){
        if ($request->has('search')) {
            $reservation = Reservation::where('tanggal','LIKE','%'.$request->search.'%')->get();
        }
        else{
            $reservation = Reservation::all();
        }

        return view('admin.reservation.index',['reservation' => $reservation]);
    
    }

    public function cetakStruk(reservation $reservation){
        $reservation = collect([$reservation]);
        $pdf = PDF::loadview('admin.reservation.export',['reservation' => $reservation])->setOptions(['defaultFont' => 'sans-serif']);
        return $pdf->download('laporan_reservasi.pdf');
    }


    //  //one to one relationship
    //  public function pelanggan(){
    //     $pelanggan = Pelanggan::all();
    //     return view ('admin.reservation.index',['pelanggan => $pelanggan']);
    //  }
}
