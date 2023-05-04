<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pegawai = Pegawai::all();
        return view('admin.pegawai.index',['pegawai'=>$pegawai]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pegawai.create');
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

        Pegawai::create([
            'nama'      =>$request->nama,
            'email'     =>$request->email,
            'password'  =>$request->password,
            'telp'      =>$request->telp,
            'alamat'    =>$request->alamat
        ]);
        return redirect('/pegawai');
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
        
        $pegawai = pegawai::find($id);
        return view('admin.pegawai.edit', ['pegawai' => $pegawai]);
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
            'telp'       => 'required',
            'alamat'    => 'required'
            
        ]); 
        //$pegawai->nama   = $request->nama;
        //$pegawai = pegawai::find($id);
        //$pegawai->email   = $request->email;  
        //$pegawai->alamat = $request->alamat; 
        //$pegawai->telp = $request->telp; 

        //$pegawai->save();

        $pegawai = Pegawai::find($id);
        $pegawai->update($request->all());

        return redirect('/pegawai');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pegawai = Pegawai::find($id);
        $pegawai->delete();

        return redirect()->back();
    }
    public function search(Request $request){
        if ($request->has('search')) {
            $pegawai = Pegawai::where('Nama','LIKE','%'.$request->search.'%')->get();
        }
        else{
            $pegawai = Pegawai::all();
        }

        return view('admin.pegawai.index',['pegawai' => $pegawai]);
    }
}
