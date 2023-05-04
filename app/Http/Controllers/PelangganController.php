<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelanggan;
use PDF;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pelanggan = Pelanggan::all();
        return view('admin.pelanggan.index',['pelanggan'=>$pelanggan]);
    }
     
    public function dowloadpdf(){
        $pelanggan = Pelanggan::all();
        $pdf = PDF::loadview('admin.pelanggan.index',['pelanggan' => $pelanggan]);
        return $pdf->dowload('laporan_menu.pdf');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pelanggan.create');
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
            'nama'      => 'required',
            'email'     => 'required',
            'password'  => 'required',
            'telp'      => 'required',
            'alamat'    => 'required'
        ]);

        Pelanggan::create([
            'nama'      =>$request->nama,
            'email'     =>$request->email,
            'password'     =>$request->password,
            'telp'      =>$request->telp,
            'alamat'    =>$request->alamat
        ]);
        return redirect('/pelanggan');
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
        
        $pelanggan = pelanggan::find($id);
        return view('admin.pelanggan.edit', ['pelanggan' => $pelanggan]);

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
            'nama'      => 'required',
            'email'      => 'required',
            'password'   => 'required',
            'telp'    => 'required',
            'alamat'    => 'required'
            
        ]); 
        //$pelanggan->nama   = $request->nama;
        //$pelanggan = pelanggan::find($id);
        //$pelanggan->email   = $request->email;  
        //$pelanggan->alamat = $request->alamat; 
        //$pelanggan->telp = $request->telp; 

        //$pelanggan->save();

        $pelanggan = Pelanggan::find($id);
        $pelanggan->update($request->all());

        return redirect('/pelanggan');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pelanggan = Pelanggan::find($id);
        $pelanggan->delete();

        return redirect()->back();
    }

    public function search(Request $request){
        if ($request->has('search')) {
            $pelanggan = Pelanggan::where('Nama','LIKE','%'.$request->search.'%')->get();
        }
        else{
            $pelanggan = Pelanggan::all();
        }

        return view('admin.pelanggan.index',['pelanggan' => $pelanggan]);
    }
}
