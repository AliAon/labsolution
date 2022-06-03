<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class tests extends Controller
{
    //
      //
      public $name;

      public function add_test(){
  
  
  
      }
      public function update_test(){
          
  
  
      }
      public function delete_test(){
          
  
  
      }
      public function view_test_list(){
          
  
  
      }
      public function by_name($name){
        $test = DB::table('tests')->where('name', $name)->get();
        return $test;
    
    }
}
