<?php
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" href="css/a2.css">
    <link href="css/a1.css?4" rel="stylesheet" type="text/css" />
  </head>
  <style type="text/css">
    #inputbtn:hover{cursor:pointer;}
    .card{
    background: #f8f9fa;
    border-top-left-radius: 5% 5%;
    border-bottom-left-radius: 5% 5%;
    border-top-right-radius: 5% 5%;
    border-bottom-right-radius: 5% 5%;
    }
  </style>
  <body style="background: -webkit-linear-gradient(left, #3931af, #00c6ff); background-size: cover;">
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav" >
    <div class="container">

      <a class="navbar-brand js-scroll-trigger" href="index.php" style="margin-top: 10px;margin-left:-65px;font-family: 'IBM Plex Sans', sans-serif;"><h4><i class="fa fa-user-plus" aria-hidden="true"></i>&nbsp PARUL SEVASHRAM HOSPITAL</h4></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item" style="margin-right: 40px;">
            <a class="nav-link js-scroll-trigger" href="index.php" style="color: white;font-family: 'IBM Plex Sans', sans-serif;"><h6>HOME</h6></a>
          </li>
  
          <li class="nav-item" style="margin-right: 40px;">
            <a class="nav-link js-scroll-trigger" href="service.php" style="color: white;font-family: 'IBM Plex Sans', sans-serif;"><h6>ABOUT US</h6></a>
          </li>

          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="contact.php" style="color: white;font-family: 'IBM Plex Sans', sans-serif;"><h6>CONTACT</h6></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>



    <div class="container-fluid" style="margin-top:60px;margin-bottom:60px;color:#34495E;">
      <div class="row">

        

         <div class="col-md-7" style="padding-left: 180px; ">
                 <div style="-webkit-animation: mover 2s infinite alternate;
    animation: mover 1s infinite alternate;">
          <img src="img/logo.jpg" alt="" style="width: 20%;padding-left: 40px;margin-top: 150px;margin-left: 45px;margin-bottom:15px">
      </div>

      <div style="color: white;">
            <h4 style="font-family: 'IBM Plex Sans', sans-serif;"> We are here for you!</h4>
          </div>

         </div>

         <div class="col-md-4" style="margin-top: 5%;right: 8%">
          <div class="card" style="font-family: 'IBM Plex Sans', sans-serif;width: 130%;height: 450px;">
            <div class="card-body">
              <center>
                <i class="fa fa-hospital-o fa-5x" aria-hidden="true" style="color:#0062cc"></i>
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">Register as Patient</h3>
                                <div class="row register-form" style="margin-top: 100px;">
                                    
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control"  id="fname" placeholder="First Name *" name="fname">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" id="email" placeholder="Your Email *" name="email">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" id="password" placeholder="Password *" id="password" name="password">
                                        </div>
                                        
                                        <div class="form-group">
                                            <div class="maxl">
                                                <label class="radio inline"> 
                                                    <input type="radio" name="gender" id="gender" value="Male" checked>
                                                    <span> Male </span> 
                                                </label>
                                                <label class="radio inline"> 
                                                    <input type="radio" name="gender" id="gender" value="Female">
                                                    <span>Female </span> 
                                                </label>
                                            </div>
                                            <a href="index.php">Already have an account?</a>
                                        </div>
                                    </div>
                                
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="lname" placeholder="Last Name *" name="lname">
                                        </div>
                                        
                                        <div class="form-group">
                                            <input type="tel" minlength="10" maxlength="10" id="number" name="contact" class="form-control" placeholder="Your Phone *">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control"  id="cpassword" placeholder="Confirm Password *" name="cpassword"><span id='message'></span>
                                        </div>
                                        <input type="submit" class="btnRegister" name="patsub1" onclick="register();" value="Register"/>
                                    </div>

                                </div>
                            </div>
            </center>
            </div>
          </div>
        </div>


      </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    function register(){
        var fname = document.getElementById('fname').value;
        var lname = document.getElementById('lname').value;
        var email = document.getElementById('email').value;
        var gender = document.getElementById('gender').value;
        var number = document.getElementById('number').value;
        var password = document.getElementById('password').value;
        var cpassword = document.getElementById('cpassword').value;
        if(password!=cpassword){
            return alert('Password Not Matching');
        }
        $.ajax({
            url:"api/user/register.php",
            method:"post",
            data:{fname:fname,lname:lname,email:email,gender:gender,number:number,password:password,cpassword:cpassword},
            success:function(data){
                if(data == 'success'){
                    window.location.href = 'userdashboard.php';
                }else{
                    alert(data);
                }
            }
        });
    }
</script>  
</body>
</html>