<?php

namespace App\Http\Controllers;

use App\Models\FauzanSyah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class FauzanSyahController extends Controller
{
    public function index(){
        $data = DB::table('fauzan_syahs')->get();
        return view('Dasboard', compact('data'));
    }
    public function insert(){
        return view('Tambah');
    }
    public function insertdata(Request $request){
        FauzanSyah::create($request->all());
        /*DB::table('fauzan_syahs')->insert([
            'nama' => $request->nama,
            'jeniskelamin' => $request->jeniskelamin,
            'notelpon' => $request->notelpon,
        ]);*/
        return redirect()->route('Dashboard');
    }
    public function UpdateData($id){
        $data = FauzanSyah::find($id);

        return view('Update', compact('data'));
    }
    public function QueryUpdate(Request $request, $id){
        $data = FauzanSyah::find($id);
        $data->Update($request->all());
        return redirect()->route('Dashboard');
    }
    public function QueryDelete($id){
        $data = FauzanSyah::find($id);
        $data->delete();
        return redirect()->route('Dashboard');

    }
}
?>