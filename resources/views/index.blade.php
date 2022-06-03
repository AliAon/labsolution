<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/app.css" rel="stylesheet" type="text/css">
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css">


        <title>SRS</title>
    </head>
    <body>


{{-- login --}}

<div class="container">
    <div class="row">
        <div class="col-lg-12"><h3 class=" text-center auto-margin p-5"> Login</h3>
        </div>
       </div>
    <div class="row justify-content-center login-forms">

        <div class="col-lg-5  " >
           
            <div class="st-login">
                <form action="{{route('login')}}" method="POST">
                  @csrf

                    <div class="form-group">
                      <label for="exampleInputEmail1">Username</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="username" placeholder="Enter Username">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">login</button>
                  </form>


            </div>
            


        </div>
    
        


    </div>



</div>



{{-- End Login --}}
        <script src="js/bootstrap.js">
        </script>
    </body>
</html>
