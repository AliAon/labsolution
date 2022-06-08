@include('users.header') 

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('users.sidebar') 
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                @include('users.topbar') 

                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>

            <section>
                <form action="{{route('/user/samplerecipent')}}" method="POST">  
                    @csrf                      
                    <div class="row">
            
                    <div class="col-4">
            
                    <div class="form-group">
                    <label for="exampleInputPicture">Location</label>
                    <input type="text" class="form-control form-control-user" id="exampleInputPicture" name="sample_location" aria-describedby="PictureHelp">
                    </div>
            
                    <div class="form-group">
                    <label for="exampleInputPicture">Patient Name</label>
                    <input type="text" name="name" class="form-control form-control-user" id="exampleInputPicture" aria-describedby="BranchHelp">
                    </div>
                    <div class="form-group">
                    <label for="exampleInputEmployee">CNIC</label>
                    <input type="text" name="CNIC" class="form-control form-control-user" id="exampleInputEmployee" aria-describedby="EmployeeHelp">
                    </div>
                    <div class="form-group">
                    <label for="exampleInputMR.NO">Email</label>
                    <input type="text" name="email" class="form-control form-control-user" id="exampleInputMR.NO" aria-describedby="MR.NOHelp">
                    </div>
                   
                    
                     <div class="form-group">
                    <label for="exampleInputPicture">Doctor</label>
                    <select class="form-control form-control-user" id="exampleFormControlSelect1" name="doctor_ref">
                        <option>Qamar</option>
                        <option>Awais</option>
                       
                      </select>    
                   </div>
                 
                   
                    </div>  
                    <div class="col-4">
            
                    <div class="form-group">
                    <label for="exampleInputPicture">Lab No</label>
                    <input type="text" class="form-control form-control-user" id="exampleInputPicture" name="labno" aria-describedby="PictureHelp">
                    </div>
            
                    <div class="form-group">
                    <label for="exampleInputPicture">F/H Name</label>
                    <input type="text" class="form-control form-control-user" id="exampleInputPicture" name="fname" aria-describedby="BranchHelp">
                    </div>
                    <div class="form-group">
                    <label for="exampleInputEmployee">Gender</label>
                    <select class="form-control form-control-user" id="exampleFormControlSelect1"  name="gender">
                        <option>Male</option>
                        <option>Female</option>
                       
                      </select>   
                    </div>
                    <div class="form-group">
                    <label for="exampleInputMR.NO">Mobile No</label>
                    <input type="text" class="form-control form-control-user" id="exampleInputMR.NO" name="phone_number" aria-describedby="MR.NOHelp">
                    </div>
                    <div class="form-group">
                    <label for="exampleInputGender">Test Name</label>
                    <select class="form-control form-control-user" id="exampleFormControlSelect1"  name="tests">
                        <option>CBC</option>
                        <option>CBC</option>
                       
                      </select>   
                    </div>
                    

                  
                    
            
                     
                    </div>
                    <div class="col-4">
                    <div class="form-group">
                    <label for="exampleInputPicture">Report Id</label>
                    <input type="text" class="form-control form-control-user" id="exampleInputPicture" name="report_id" aria-describedby="PictureHelp">
                    </div>
            
                    <div class="form-group">
                    <label for="exampleInputPicture">Age</label>
                    <input type="text" class="form-control form-control-user" id="exampleInputPicture" name="age" aria-describedby="BranchHelp">
                    </div>
                    <div class="form-group">
                    <label for="exampleInputEmployee">Special or Routine</label>
                    <select class="form-control form-control-user" id="exampleFormControlSelect1"  name="sporrotine">
                        <option>Special</option>
                        <option>Routine</option>
                       
                      </select>   
                    </div>
                    <div class="form-group">
                        <label for="exampleInputGender">Register Date</label>
                        <input type="date" class="form-control form-control-user" id="exampleInputPicture" name="registor_date" aria-describedby="PictureHelp">
                        </div>
                   
                    <div class="form-group">
                    <label for="exampleInputPicture">Test Status</label>
                    <input type="text" class="form-control form-control-user" id="exampleInputPicture" name="status" aria-describedby="PictureHelp">
                    </div>
                 
                    </div>
                   </div>

                   
                   
                   <hr> 
                   <div class="row">
                    <div class="col-4">
                        <div class="form-group">
                            <label for="exampleInputPicture">Test Code</label>   
                      
                        <input type="text" class="form-control form-control-user" id="testcode" name="test_code" aria-describedby="PictureHelp">
                    </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="exampleInputPicture">Test Name</label>   
                        
                        <input type="text" class="form-control form-control-user" id="testname" name="test_name" aria-describedby="PictureHelp">
                    </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="exampleInputPicture">Specmons </label> 
                            <input type="text" class="form-control form-control-user" id="exampleInputPicture" name="registor_date" aria-describedby="PictureHelp">
                        
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                        <button type="button" class="btn btn-primary" id="add_to_basket">add to basket</button>
                        </div>

                    </div>

                   </div>
                   <div class="ferch test" id="test-list">
                    <div class="row">
                        <div class="col-1">

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" >
                          </div> 
                        </div>   
                        <div class="col-2">
                        <div class="form-group">
                            <label for="exampleInputPicture">Test Name</label>
                        </div>
                         </div>
                    <div class="col-3">
                        <div class="form-group">
                            <label for="exampleInputPicture">Price</label>
                            <p>1000</p>     
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-group">
                            <label for="exampleInputPicture">Spenmons </label>   
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-group">
                            <label for="exampleInputPicture">Duration </label>   
                        </div>
                    </div>
                    </div>
                   </div>
{{-- 
                   calculate --}}
                   <div class="row">
                       <div class="col-lg-3">
                   <label for="exampleInputPicture">TOTAL</label><br>
                   <label for="exampleInputPicture"> Discount</label><br>
                   <label for="exampleInputPicture"> Paid</label><br>
                   <label for="exampleInputPicture"> Balance</label><br>
                       </div>
                    <div class="col-lg-9">
                        <input type="text" class="form-control form-control-user" id="exampleInputMR.NO" name="phone_number" aria-describedby="MR.NOHelp">
                        <input type="text" class="form-control form-control-user" id="exampleInputMR.NO" name="phone_number" aria-describedby="MR.NOHelp">
                        <input type="text" class="form-control form-control-user" id="exampleInputMR.NO" name="phone_number" aria-describedby="MR.NOHelp">
                 
                        <input type="text" class="form-control form-control-user" id="exampleInputMR.NO" name="phone_number" aria-describedby="MR.NOHelp">
                 
                    </div>  
                </div>
                   <div>



                   </div>
                    <button type="submit" class="btn btn-primary">save</button>
                </form>
                </section>   
            <!--       end colltion -->
                    

                 
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    
  





    @include('users.footer')



    <script>
        
   
        jQuery(document).ready(function(){
            $( "#add_to_basket" ).click(function() {
              
            
            $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
            });
            $.ajax({
              type:'POST',
              url:'/user/samplerecipent/testlist',
                dataType:"json",
                data:{
                   "name":$("#testname").val(),
                   "code":$("#testcode").val(),
               },
               success:function(data,textStatus) {

                console.log(data);

                
               }
            });


            }); 
        });
               
             </script>
    </body>
    
    </html>