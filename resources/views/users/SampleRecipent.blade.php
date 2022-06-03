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
                    

                    <div class="form-group">
                    <label for="exampleInputGender">Register Date</label>
                    <input type="date" class="form-control form-control-user" id="exampleInputPicture" name="registor_date" aria-describedby="PictureHelp">
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
                    <label for="exampleInputPicture">Test Status</label>
                    <input type="text" class="form-control form-control-user" id="exampleInputPicture" name="status" aria-describedby="PictureHelp">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPicture">Discount</label>
                        <select class="form-control form-control-user" id="exampleFormControlSelect1"  name="discount">
                            <option>50%</option>
                            <option>0%</option>
                          </select>  
                        </div>
                    </div>
                   </div>
                       <hr> 
                    <button type="submit" class="btn btn-primary">Update</button>
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