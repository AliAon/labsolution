<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\patients;
use App\Http\Controllers\doctors;
use App\Http\Controllers\tests;
use App\Http\Controllers\expences;
use Dompdf\Dompdf; 


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
    public function sample_recipeint(Request $request,patients  $patient ){

     
            $patient_id=$patient->add_patient($request->input('name'),$request->input('fname'),$request->input('age'),$request->input('gender'),$request->input('email'),$request->input('phone_number'),$request->input('report_id'),$request->input('discount'),$request->input('tests'),$request->input('doctor_ref'),
            $request->input('CNIC'),$request->input('registor_date'),$request->input('sporrotine'),$request->input('status'),$request->input('sample_location'),$request->input('labno'));
            $patient->genratevoucher($patient_id,$request->input('subtotal'),$request->input('total'),$request->input('paid'),$request->input('balance'),$request->input('discount'),$request->input('labno'));
            
    }
    //search patient
    public function search_patient(Request $request,patients  $patient){
        $patient_record=$patient->by_name($request->input('byname'));
            return view('users.SearchDeues',['patients'=>$patient_record]);
         
    }
     //search Doctors
     public function search_doctor(Request $request,doctors $doctor){
        $doctor_record=$doctor->by_name($request->input('byname'));
            return view('users.Doctors',['doctors'=>$doctor_record]);
         
    }

    public function add_doctor(){



    }
    public function update_doctor(){
        


    }
    public function delete_doctor(){
        


    }
    public function view_doctors_list(){
        


    }
    //search Tests
    public function search_test(Request $request, tests $test){

           $test_record=$test->by_name($request->input('byname'));
            return view('users.Tests',['tests'=>$test_record]);
        
    }
    public function add_test(){



    }
    public function update_test(){
        


    }
    public function delete_test(){
        


    }
    public function view_tests_list(Request $request,tests $test){


        if(isset($request)){
            $test_record_code=$test->by_code($request->input('code'));
            $test_record_name=$test->by_name($request->input('name'));

            if(!count($test_record_name) == 0){
                return $test_record_name;
            }elseif(!count($test_record_code) == 0){
                return $test_record_code;

            }

        }

     


    }

    public function testlisttotal(Request $request,patients  $patient ){

        $total=0;
        $arrvalues=$request->input('arr');
        foreach ($arrvalues as $val) {
            $total+=$patient->totalprice($val);
        }
        return $total;
      
    }
    //expence
 //search Tests
 public function search_expence(Request $request,expences  $expence){

   
    $expence_record=$expence->by_name($request->input('byname'));
        return view('users.Expence',['expences'=>$expence_record]);
    
}
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
    public function genratevoucher(Request $request,patients  $patient){







        


    }



}
