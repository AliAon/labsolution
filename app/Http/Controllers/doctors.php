<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class doctors extends Controller
{
    //
    public $name;

    public function add_doctor(){



    }
    public function update_doctor(){
        


    }
    public function delete_doctor(){
        


    }
    public function view_doctor_list(){
        


    }
    public function by_name($name){
        $doctor = DB::table('doctors')->where('name', $name)->get();
        return $doctor;
    
    }
}
