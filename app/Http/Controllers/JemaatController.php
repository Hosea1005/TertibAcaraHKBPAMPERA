<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JemaatController extends Controller
{
    //
    public function listTertibAcaraMingguan(){

        $data =[
            'tata' => \DB::table('list_mingguan')->where('status', 1)->get(),
        ];
        return view('l_acara_mingguan', $data);
    }

    public function listTertibAcaraNatal(){

        $data =[
            'tata' => \DB::table('list_mingguan')->where('status', 2)->get(),
        ];
        return view('l_natal', $data);
    }

    public function listTertibAcaraPaskah(){

        $data =[
            'tata' => \DB::table('list_mingguan')->where('status', 3)->get(),
        ];
        return view('l_paskah', $data);
    }

    public function listTertibAcaraJumatAgung(){

        $data =[
            'tata' => \DB::table('list_mingguan')->where('status', 4)->get(),
        ];
        return view('l_jumatagung', $data);
    }
    public function listTertibAcaraKenaikan(){

        $data =[
            'tata' => \DB::table('list_mingguan')->where('status', 5)->get(),
        ];
        return view('l_kenaikan', $data);
    }

    public function listTertibAcaraPentakosta(){

        $data =[
            'tata' => \DB::table('list_mingguan')->where('status', 6)->get(),
        ];
        return view('l_pentakosta', $data);
    }
    public function detailTertibAcaraMingguan($id){

        $data =[
            'tata' => \DB::table('list_mingguan')->where('id', $id)->first(),
        ];
        return view('detail_mingguan', $data);
    }
}
