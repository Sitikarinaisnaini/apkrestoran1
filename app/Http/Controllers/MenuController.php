<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menu = Menu::all();
        return view('admin.menu.index',['menu'=>$menu]);
    }
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.menu.create');
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
            'makanan'      => 'required',
            'minuman'     => 'required',
            'dessert'      => 'required'
            ]);

        Menu::create([
            'makanan'      =>$request->makanan,
            'minuman'     =>$request->minuman,
            'dessert'      =>$request->dessert,
        ]);
        return redirect('/menu');
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
      
        $menu = menu::find($id);
        return view('admin.menu.edit', ['menu' => $menu]);
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
            'makanan'      => 'required',
            'minuman'      => 'required',
            'dessert'    => 'required'
            
        ]); 
        //$menu->makanan   = $request->makanan;
        //$menu = Menu::find($id);
        //$menu->minuman   = $request->minuman;  
        //$menu->dessert = $request->dessert; 

        //$menu->save();

        $menu = Menu::find($id);
        $menu->update($request->all());

        return redirect('/menu');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $menu = Menu::find($id);
        $menu->delete();

        return redirect()->back();
    }
    
    public function search(Request $request){
        if ($request->has('search')) {
            $menu = Menu::where('Makanan','LIKE','%'.$request->search.'%')->get();
        }
        else{
            $menu = Menu::all();
        }

        return view('admin.menu.index',['menu' => $menu]);
    }
}
