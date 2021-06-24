<?php

namespace App;
// use Illuminate\Support\Facades\DB;
// use Illuminate\Database\Eloquent\Model;
namespace App\Http\Controllers;
use App\Models\TertibModel;

class HomeController extends Controller
{
    //
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data =[
            'tata' => \DB::table('list_mingguan')->get(),
        ];
        return view('dashboardAdmin', $data);
    }

    public function homeJemaat(){

        $data =[
            'tata' => \DB::table('list_mingguan')->first(),
        ];
        return view('welcome', $data);
    }

    public function dashboardAdmin(){

        $data =[
            'tata' => \DB::table('list_mingguan')->get(),
        ];
        return view('dashboardAdmin', $data);
    }

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

    public function detailTertibAcaraMingguanAdmin($id){

        $data =[
            'tata' => \DB::table('list_mingguan')->where('id', $id)->first(),
        ];
        return view('detail_mingguan_admin', $data);
    }

    public function insertTertib(){

        $data =[
            'e1' => Request()->e1,
            'le1' => Request()->le1,
            'e2' => Request()->e2,
            'le2' => Request()->le2,
            'e3' => Request()->e3,
            'le3' => Request()->le3,
            'e4' => Request()->e4,
            'le4' => Request()->le4,
            'e5' => Request()->e5,
            'le5' => Request()->le5,
            'e6' => Request()->e6,
            'le6' => Request()->le6,
            'e7' => Request()->e7,
            'le7' => Request()->le7,
            'n_minggu' => Request()->n_minggu,
            'date' => Request()->date,
            'epistel' => Request()->epistel,
            'jamita' => Request()->jamita,
            'status' => Request()->status
        ];

        \DB::table('list_mingguan')->insert($data);
        return redirect()->route('home');
    }
    public function deleteTertib($id){

        $data =[
            'tata' => \DB::table('list_mingguan')->where('id', $id)->delete(),
        ];
        return redirect()->route('home');
    }

    public function editTertib($id){

        $data =[
            'tata' => \DB::table('list_mingguan')->where('id', $id)->first(),
        ];
        return view('editTataTertib', $data);
    }

    public function updateTertib($id){

        $data =[
            'e1' => Request()->e1,
            'le1' => Request()->le1,
            'e2' => Request()->e2,
            'le2' => Request()->le2,
            'e3' => Request()->e3,
            'le3' => Request()->le3,
            'e4' => Request()->e4,
            'le4' => Request()->le4,
            'e5' => Request()->e5,
            'le5' => Request()->le5,
            'e6' => Request()->e6,
            'le6' => Request()->le6,
            'e7' => Request()->e7,
            'le7' => Request()->le7,
            'n_minggu' => Request()->n_minggu,
            'date' => Request()->date,
            'epistel' => Request()->epistel,
            'jamita' => Request()->jamita,
            'status' => Request()->status
        ];

        \DB::table('list_mingguan')->where('id', $id)->update($data);
        return redirect()->route('home');
    }

}
