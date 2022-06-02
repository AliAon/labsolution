<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\patients;
use Illuminate\Http\Request;

class user extends Controller
{
    //
    public $firstname;
    public $lastname;
    public $username;
    public $password;
    public $role;
    public $user;

    //login
    public function login_user(Request $request){

        $this->username=$request->input('username');
        $this->password=$request->input('password');
        $user = DB::table('users')->where('username', '=', $this->username)->first();
        if( $user->password==$this->password){
            $request->session()->put('username', $user->username);
            return redirect('/user');
        }
        else{
            return redirect('/');
        }
    }

    //logout
    public function logout_user(Request $request){
        $request->session()->flush();
        return redirect('/');

    }
    
    //sample recipeint
    public function sample_recipeint(){


    }
    //search patient
    public function search_patient(Request $request){

        $patient=new patients();
        $patient_record=$patient->by_name($request->input('byname'));
            return view('users.SearchDeues',['patients'=>$patient_record]);
         
    }
    // Doctors

    public function add_doctor(){



    }
    public function update_doctor(){
        


    }
    public function delete_doctor(){
        


    }
    public function view_doctors_list(){
        


    }
    //Tests

    public function add_test(){



    }
    public function update_test(){
        


    }
    public function delete_test(){
        


    }
    public function view_tests_list(){
        


    }
    //expence

    public function add_expence(){



    }
    public function update_expence(){
        


    }
    public function delete_expence(){
        


    }
    public function view_expences_list(){
        


    }

    //statements
    public function statement(){
        


    }

    public function view_statement_list(){
        


    }
    //report
    public function view_report_list(){
        


    }
    public function special_report(){
        


    }
    public function routine_report(){
        


    }
    public function genrate_report(){
        


    }



}
