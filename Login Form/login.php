<?php
  if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'connect.php';
    $id=$_POST['Std_id'];
    $password=$_POST['password'];
     
    $sql="SELECT * FROM `signup` WHERE id='$id' and password='$password'";
    $result= mysqli_query($conn,$sql);

    if($result){
        $num=mysqli_num_rows($result);
        if($num>0){
          session_start();
          $_SESSION["Std_id"] = $id;
          if($id=="juw076" or $id=="juw084" ){
            header("location: ../Std_Landing Page/index_cs1.php");
          }
          elseif ($id=="juw079" or $id=="juw080") {
            header("location: ../Std_Landing Page/index_se1.php");
          }
          elseif ($id=="juw078" or $id=="juw077" or $id=="juw090") {
            header("location: ../Std_Landing Page/index_se.php");
          }
          elseif ($id=="juw092" or $id=="juw088") {
            header("location: ../Std_Landing Page/index_cs2.php");
          }
          elseif($id=="juw082" or $id=="juw085"){
            header("location: ../Std_Landing Page/index_cs3.php");
          }
          
          else{
            echo("this student not enrolled");
          }   
    }
  }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FYP | Login Page</title>
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
                  <h>Jinnnah University For Women<br><pre style="font-size: 18px;">          FYP Evaluation System</pre>
                </div>
                <div class="card-body p-md-5">
                  <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-9 order-2 order-lg-1">
                      <p class="text-center h2 fw-bold mb-5 mx-1 mx-md-4 mt-9">Log In</p>
                      <form class="mx-1 mx-md-4" method="POST" action="">
      
                        <div class="d-flex flex-row align-items-center mb-4">
                          <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                          <div class="form-outline flex-fill mb-0">
                            <input type="text" name="Std_id" id="form3Example1c" class="form-control" placeholder="UserID"/>
                          </div>
                        </div>
      
                        <div class="d-flex flex-row align-items-center mb-4">
                          <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                          <div class="form-outline flex-fill mb-0">
                            <input type="password" name="password" id="form3Example4c" class="form-control" placeholder="Password" />
                          </div>
                        </div>

                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                          <button type="submit" name="submit" class="btn btn-primary btn-lg"onclick="location.href = ''"; id="myButton">Log In</button>
                        </div>
                        
                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                          <p><a href='../Forget Pwd/index.php'>Forgot Password.?</a></p>
                        </div>
      
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
  </body>
  </html>

<style>
  /*Style*/
  .hero-image {
    background-image: url("../images/juwww.jpeg");
    background-color: #c7c4c4;
    height: 100vh;
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
     box-shadow: 2px 5px 6px #d5d5d5;
     border-radius: 2%;
     block-size: max-content;
}


.container{
  display: flex;
  padding-left: 10%;
  
}
.row g-3{
  display: flex;
}

.card-img-center{
  justify-content: center;
  justify-self: center;
  justify-items: center;
}
</style>

