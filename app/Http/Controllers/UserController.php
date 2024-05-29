<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Tanaman;
use Carbon\Carbon;

class UserController extends Controller
{
    function index(){
        return view('index');
    }
    
    function jagung(){
        $jagung = tanaman::where('tanaman', 'jagung')->get();
        $tanaman = tanaman::get();
        return view('jagung',compact(['jagung','tanaman']));
    }
    function terong() { 
        $terong = tanaman::where('tanaman', 'terong')->get();
        $tanaman = tanaman::get();
        return view('terong',compact(['terong','tanaman']));

    }
    function cabai() { 
        $cabai = tanaman::where('tanaman', 'cabai')->get();
        $tanaman = tanaman::get();
        return view('cabai',compact(['cabai','tanaman']));

    }
    function form(){
        return view('form');
    }

    function tambahData(Request $request){
        // dd($request->all()); untuk cek data masuk atau tidak
        $validator = Validator::make($request->all(),[
            'tanaman' => 'required',
            'alamat' => 'required',
            'tglTanam' => 'required',
        ]); 
        if($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        };
        $masaTumbuh = 0;
        if ( $request->tanaman === 'jagung' ) {
            $masaTumbuh = 80;
        }elseif( $request->tanaman === 'terong' ) {
            $masaTumbuh = 110;
        }elseif( $request->tanaman === 'cabai' ) {
            $masaTumbuh = 110;
        }

        $tglPanen = Carbon::parse($request->tglTanam)->addDays($masaTumbuh);

        Tanaman::create([
            'tanaman' => $request->tanaman,
            'alamat' => $request->alamat,
            'tglTanam' => $request->tglTanam,
            'tglPanen' => $tglPanen
        ]);

        return redirect()->route('index');
        

    }

    function delete(Request $request, $id){
        $data = Tanaman::find($id); // Menemukan data Petugas berdasarkan ID
        if ($data){
            $data->delete(); // Menghapus data jika ditemukan
        }
        return redirect()->route('jagung');
    }

    // function edit($id) {
    //     $petugas = Petugas::find($id);
    //     return view('admin.edit',compact(['petugas']));
    // }

    // function update(Request $request, $id){
    //     $petugas = Petugas::findorFail($id);

    //     // $request->validate([

    //     // ]);

    //     $petugas->update($request->all());
    //         return redirect()->route('admin.petugas');
    // }

    public function __invoke($method, $parameters = []){
        return $this->{$method}(...$parameters);
    }
}
?>
