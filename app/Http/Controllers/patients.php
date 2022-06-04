<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class patients extends Controller
{
    public $name;
    public $fname;
    public $report_id;
    public $age;  
    public $gender;    
    public $phone_number;
    public $email;
    public $discount;
    public $sample_location;
    public $tests=array();
    public $doctor_ref;
    public $CNIC;
    public $registor_date;
    public $spcial;
    public $routine;
    public $status;
    public $labno;
   

    //add patient
    public function add_patient($name,$fname,$age,$gender,$email,$phone_number,$report_id,$discount,$tests,$doctor_ref,
    $CNIC,$registor_date,$spcialorroutine,$status,$sample_location,$labno){
        $record=DB::table('patients')->insert([
            'name'         => $name,
            'f_name'       => $fname,
            'age'          => $age,
            'gender'       => $gender,
            'email'        => $email,
            'report_id'    => $report_id,
            'phone_number' => $phone_number,
            'discount'     => $discount,
            'loctaion'     => $sample_location,
            'test_list'    => $tests,
            'ref_doctor'   => $doctor_ref,
            'CNIC'         => $CNIC,
            'specialorroutine'      => $spcialorroutine,
            'lab_no'       => $labno,
            'registor_date'=> $registor_date
        ]);
        if($record){
            return 'updated record';
        }



    }

    
    //update patient
    public function update_patient(){


    }
    //delete patient
    
    public function delete_patient(){


    }

    // status
    public function change_status(){


    }
    //filters
    public function by_name($name){
        $patient = DB::table('patients')->where('name', $name)->get();
        return $patient;
    
    }
    public function by_phone_number(){


    }
    public function by_report_id(){


    }
    public function genratereport() 
    { 
        
    } 
    







    //filter
    




}
