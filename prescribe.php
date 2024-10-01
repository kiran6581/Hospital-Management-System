<?php
error_reporting(0);
include("conn.php");
session_start();
$dname=$_SESSION['dname'];
if(!$dname){
  header("Location: index.php");
}
if(isset($_GET['pid']) && isset($_GET['ID']) && ($_GET['appdate']) && isset($_GET['apptime']) && isset($_GET['fname']) && isset($_GET['lname'])) {
  $pid = $_GET['pid'];
    $ID = $_GET['ID'];
    $fname = $_GET['fname'];
    $lname = $_GET['lname'];
    $appdate = $_GET['appdate'];
    $apptime = $_GET['apptime'];
}else{
  header("Location: doctordashboard.php?hs=1");
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/a2.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans&display=swap" rel="stylesheet">
      <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
  <a class="navbar-brand" href="#"><i class="fa fa-user-plus" aria-hidden="true"></i>PARUL SEVASHRAM HOSPITAL</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <style >
    .bg-primary {
    background: -webkit-linear-gradient(left, #3931af, #00c6ff);
}
.list-group-item.active {
    z-index: 2;
    color: #fff;
    background-color: #342ac1;
    border-color: #007bff;
}
.text-primary {
    color: #342ac1!important;
}

.btn-primary{
  background-color: #3c50c1;
  border-color: #3c50c1;
}
  </style>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
     <ul class="navbar-nav mr-auto">
       <li class="nav-item">
        <a class="nav-link" href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a>
        
      </li>
       <li class="nav-item">
       <a class="nav-link" href="doctordashboard.php"><i class="fa fa-sign-out" aria-hidden="true"></i>Back</a>
      </li>
    </ul>
  </div>
</nav>

</head>
  <style type="text/css">
    button:hover{cursor:pointer;}
    #inputbtn:hover{cursor:pointer;}
  </style>

<body style="padding-top:50px;">
   <div class="container-fluid" style="margin-top:50px;">
    <h3 style = "margin-left: 40%;  padding-bottom: 20px; font-family: 'IBM Plex Sans', sans-serif;"> Welcome &nbsp<?=$_SESSION['dname']?>  </h3>

   <div class="tab-pane" id="list-pres" role="tabpanel" aria-labelledby="list-pres-list">
        <div class="row">
                  <div class="col-md-4"><label>Disease:</label></div>
                  <div class="col-md-8">
                  <textarea id="disease" cols="86" rows ="5" name="disease" required></textarea>
                  </div><br><br><br>
                  
                  <div class="col-md-4"><label>Allergies:</label></div>
                  <div class="col-md-8">
                  <textarea id="allergy" cols="86" rows ="5" name="allergy" required></textarea>
                  </div><br><br><br>
                  <div class="col-md-4"><label>Prescription:</label></div>
                  <div class="col-md-8">
                  <textarea id="prescription" cols="86" rows ="10" name="prescription" required></textarea>
                  </div><br><br><br>
                  <br><br><br><br>
          <input type="submit" name="prescribe" value="Prescribe" onclick="prescribe();"class="btn btn-primary" style="margin-left: 40pc;">
        <br>
        <script>
          function prescribe(){
            var fname = '<?=$fname?>';
            var lname = '<?=$lname?>';
            var appdate = '<?=$appdate?>';
            var apptime = '<?=$apptime?>';
            var pid = '<?=$pid?>';
            var ID = '<?=$ID?>';
            var disease = document.getElementById('disease').value;
            var allergy = document.getElementById('allergy').value;
            var prescription = document.getElementById('prescription').value;
            $.ajax({
            url:"api/doctor/prescribe.php",
            method:"post",
            data:{fname:fname,lname:lname,appdate:appdate,apptime:apptime,pid:pid,ID:ID,disease:disease,allergy:allergy,prescription:prescription},
            success:function(data){
                if(data == 'success'){
                    window.location.href = 'doctordashboard.php?hs=2';
                }else{
                    alert(data);
                }
            }
        });
          }
        </script>
      </div>
      </div>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  </body>
</html>
