<?php
  if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'connect.php';
    $Project_ID = $_POST['Project_ID'];
    $Proj_Name = $_POST['Proj_Name'];
    $Members_Name = $_POST['Members_Name'];
    $Superv_ID  = $_POST['Superv_ID'];
    $Sessions = $_POST['Sessions'];

    $sql="SELECT * FROM `projects` WHERE Project_ID='$Project_ID'";
 
if (isset($_POST['submit'])){
    $Project_ID = $_POST['Project_ID'];
    $Proj_Name = $_POST['Proj_Name'];
    $Members_Name=$_POST['Members_Name'];
    $Superv_ID  = $_POST['Superv_ID'];
    $Sessions = $_POST['Sessions'];

$insert = "INSERT INTO `projects` (`Project_ID`, `Proj_Name`, `Members_Name`, `Superv_ID `, `Sessions`) VALUES ('$Project_ID','$Proj_Name','$Members_Name','$Superv_ID','$Sessions')";

//echo "Query<br>".$insert;

$connection = mysqli_connect('localhost', 'root', '' , 'project');
$execute = mysqli_query($connection, $insert);
       
  }
}
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>JUW | FYP | Add Project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
  </head>
  <body>
      <div class="hero-image">
        <div class="hero-text">
          <div class="fluid-container h-100 body-frame" >
          <div class="row d-flex justify-content-center align-items-center" >
            <div class="col-lg-9 col-xl-12">
              <div class="card text-black">
                <div class="text-black logoHeader">
                  <img src="../images/JUW_Logo.png" alt="JUW" style="cursor: pointer; width: 12%;">
                  <h>Jinnnah University For Women<br><pre style="font-size: 18px;">         FYP Evaluation System</pre></h>
                </div>
                <div class="card-body p-md-5">
                  <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-9 order-2 order-lg-1">
                      <p class="text-center h2 fw-bold mb-5 mx-1 mx-md-4 mt-9">Add Project</p>
                      <form class="mx-1 mx-md-4" action="" method="POST">


                        <div class="d-flex flex-row align-items-center mb-4">
                          <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                          <div class="form-outline flex-fill mb-0">
                            <input type="text" name="Project_ID" id="form3Example1c" class="form-control" placeholder="Project_ID" required />
                          </div>
                        </div>
     
                        <div class="d-flex flex-row align-items-center mb-4">
                          <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                          <div class="form-outline flex-fill mb-0">
                            <input type="text" name="Proj_Name" id="form3Example3c" class="form-control" placeholder="Project Name" required />
                          </div>
                        </div>

                        <div class="d-flex flex-row align-items-center mb-4">
                          <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                          <div class="form-outline flex-fill mb-0">
                            <input type="text"  name="Members_Name" id="form3Example1c" class="form-control" placeholder="Members_Name" required />
                          </div>
                        </div>

                       <div class="d-flex flex-row align-items-center mb-4">
                          <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                          <div class="form-outline flex-fill mb-0">
                            <input type="text" name="Superv_ID" id="form3Example1c" class="form-control" placeholder="Superv_ID" required/>
                          </div>
                        </div>

                        <div class="d-flex flex-row align-items-center mb-4">
                             <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                            <div class="form-outline flex-fill mb-0">
                             <select name="Sessions" id="form3Example1c" class="form-control">
                                 <option value="Role">Session</option>
                               
                                 <option value="Student">CS</option>
                                 <option value="Teacher">SE</option>
                   
                              </select>

                              <!-- <input type="text" id="form3Example1c" name="role" class="form-control" placeholder="Role" required/>-->
                            </div>
                        </div>
     

                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                          <button type="submit" name="submit"  class="btn btn-primary btn-lg">Submit</button>
                        </div>
                       
                        <!--<div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                          <p><a href="#">Forgot Password.?</a></p>
                        </div>-->
     
                      </form>
     
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        </div>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>

<style>
  /Style/
  .hero-image {
    background-image: url("../images/juwww.jpeg");
    background-color: #c7c4c4;
    height: 125vh;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
    opacity: 0.8;
  }
 
  .hero-text {
    text-align: center;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: rgb(245, 232, 207);
  }

.logoHeader{
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    font-size: 30px;
    text-align: left;
    margin-top: 20px;
    box-shadow: 5px 10px 18px #d5d5d5;
    border-radius: 2%;
}
</style>
