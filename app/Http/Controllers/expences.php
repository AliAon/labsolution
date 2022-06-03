<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class expences extends Controller
{
    //
    public $name;

    public function add_expence(){



    }
    public function update_expence(){
        


    }
    public function delete_expence(){
        


    }
    public function view_expences_list(){
        


    }
    public function view_total_expence(){
        


    }
    public function by_name($name){
        $expence = DB::table('expences')->where('name', $name)->get();
        return $expence;
    
    }
}
