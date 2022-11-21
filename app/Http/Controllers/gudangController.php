<?php

namespace App\Http\Controllers;

use App\Models\Gudang;
use Illuminate\Http\Request;

class gudangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return 'menampilkan data gudang';
        $komponen = gudang::all();
         return view('gudang.list', ['komponen'=>$komponen]);
    }

    public function pembelian()
    {
         return view('pembelian');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return 'data masuk sini yook';
        $datamasuk = new gudang;
        return view('gudang.create', compact('datamasuk'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $model = new gudang;
        $model->name =$request->name;
        $model->venodr =$request->venodr;
        $model->sotrage =$request->storage;
        $model->price =$request->price;
        $model->qty =$request->qty;
        $model->Keterangan =$request->Keterangan;
        $model->save();
        return redirect('gudang');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gudang  $gudang
     * @return \Illuminate\Http\Response
     */
    public function show(Gudang $gudang)
    {
        return "tampilan shw";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gudang  $gudang
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = gudang::find($id);
        return view('gudang.edit', compact('model'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gudang  $gudang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $model = gudang::find($id);
        $model->name =$request->name;
        $model->venodr =$request->venodr;
        $model->sotrage =$request->storage;
        $model->price =$request->price;
        $model->qty =$request->qty;
        $model->Keterangan =$request->Keterangan;
        $model->save();
        return redirect('gudang');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gudang  $gudang
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $model = gudang::find($id);
       $model->delete();
       return redirect('gudang');
    }
}
