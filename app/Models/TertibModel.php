<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class TertibModel extends Model
{
    public function allData(){
        return DB::table('list_mingguan')->get();
    }
}
