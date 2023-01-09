<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>JUW | FYP | Notification Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="./style_stud.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
  </head>
  <body>
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

<div class="wrapper">
	<div class="navbar">

		<div class="logo">
      <img src="../images/o.png" alt="JUW" href="#!" style="cursor: pointer; width: 35%; margin-left: -4%; margin-top: -3%;" >
			
		</div>
		<div class="nav_right">
			<ul>
				<li class="nr_li dd_main">
					<img src="../images/y.png" alt="profile_img"  style="margin-left: 50%;"><p><strong>FYP Member</strong></p>
					
					<div class="dd_menu">

						<div class="dd_right">
							<ul>
                <li onclick="location.href = '/FYP Automation System2/Fyp_Landing Page/profile.php';">Profile</li>
								<li onclick="location.href = '/FYP Automation System2/Fyp_Landing Page/not.php';">Notification</li>
								<li onclick="location.href = '/FYP Automation System2/Fyp_Landing Page/sett.php';">Preferences</li>
								<li onclick="location.href = '/FYP Automation System2/Login Form/logout.php';">Log Out</li>

							</ul>
						</div>
					</div>
				</li>

			</ul>
		</div>
	</div>
</div>	
<script>
  var dd_main = document.querySelector(".dd_main");

dd_main.addEventListener("click", function(){
  this.classList.toggle("active");
})
</script>
<hr>
<div class="container">
    <div class="main-body">
    
          <div class="row gutters-sm justify-content-center">

            <div class="col-md-7">
              <div class="card mb-3">
                <div class="card-body">
                  <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" onclick="location.href = '/FYP Automation System2/Sup_Landing Page/index_se.php';" role="tab" aria-controls="profile" aria-selected="false" style="cursor: pointer;">Dashboard</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" onclick="location.href = '/FYP Automation System2/Fyp_Landing Page/profile.php';" role="tab" aria-controls="home" aria-selected="true"style="cursor: pointer;">Profile</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" onclick="location.href = '/FYP Automation System2/Fyp_Landing Page/not.php';" role="tab" aria-controls="home" aria-selected="true"style="cursor: pointer;">Notification</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" onclick="location.href = '/FYP Automation System2/Fyp_Landing Page/sett.php';" role="tab" aria-controls="home" aria-selected="true"style="cursor: pointer;">Preferences</a>
                                </li>
                            </ul>
                            <br>
                  <div class="row">
                    <div class="col-sm-12">

                      <h6 class="mb-3 h3" id="profile"><center>Notification</center></h6>
                    </div>

                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0 h5" style="cursor: pointer;" >no notification</h6>
                    </div>

                  </div>

   
                </div>
              </div>

                      
                        
                      </div>
                    </div>
                  </div>
                </div>

              </div>



            </div>
          </div>

        </div>
    </div>



<br>
<br>
<br>

<hr>


    


<!-- Footer -->
<footer class="bg-dark text-center text-white">
  <!-- Grid container -->
  <div class="container p-4">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <img src="/FYP Automation System2/images/o.png" alt="JUW" style="cursor: pointer; width: 30%; ">
      <br><br>
      <pre><p class="text-light">5 Nazimabad Road no: 03 Karachi, 746000 Pakistan  |  Telephone: (92-21) 36620857-59 </p></pre>
      
      <!--<pre>          
        <p><a href="" class="me-4 link-secondary text-white"><i class="fas fa-envelope me-3 text-secondary-white"></i>info@example.com</p></a></pre> -->

      <a class="btn btn-outline-light btn-floating m-1" href="https://web.facebook.com/juwofficialpage/?_rdc=1&_rdr" role="button"><i class="fab fa-facebook-f"></i></a>

      <!-- Google -->
      <a class="btn btn-outline-light btn-floating m-1" href="info@juw.edu.pk" role="button"
        ><i class="fab fa-google"></i
      ></a>

      <!-- Instagram -->
      <a class="btn btn-outline-light btn-floating m-1" href="https://www.instagram.com/jinnah_university_women/?utm_medium=copy_link" role="button"
        ><i class="fab fa-instagram"></i
      ></a>

      <!-- Linkedin -->
      <a class="btn btn-outline-light btn-floating m-1" href="https://www.linkedin.com/school/jinnah-university-for-women/" role="button"
        ><i class="fab fa-linkedin-in"></i
      ></a>


    </section>
   
    
 
  </div>

  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2022. All rights reserved.
    <a class="text-white" href="https://www.juw.edu.pk/">https://www.juw.edu.pk/</a>
  </div>
 
</footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
    
  </body>
</html>
<!--
  
        
-->
<style>
/*Style*/

.logoHeader{
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    font-size: 25px;
    text-align: left;
    border-radius: none;
}

.tableHead{
    font-size: 25px;

}


@import url('https://fonts.googleapis.com/css2?family=Jost:wght@400;700&display=swap');

  *{
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      list-style: none;
      font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
  }
  
  .navbar{
      background: hsla(240, 42%, 16%, 0.965);
      width: 100%;
      height: 75px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 0 50px;
  }
  
  .navbar .logo a{
      display: block;
      text-decoration: none;
      color: #fff;
      font-weight: 700;
      letter-spacing: 2px;
      font-size: 25px;
      text-transform: uppercase;
  }
  
  .navbar .nav_right > ul{
      display: flex;
      align-items: center;
  }
  
  .navbar .nav_right ul li.nr_li{
      margin-left: 25px;
      cursor: pointer;
      color: #fff;
      font-size: 20px;
      position: relative;
  }
  
  .navbar .nav_right ul li.nr_li:hover {
      color:#fff;
  }
  
  .navbar .nav_right ul li img{
      width: 35px;
      vertical-align: middle;
  }
  
  .navbar .dd_menu {
      position: absolute;
      right: -25px;
      top: 47px;
      display: flex;
      background: #fff;
      border-radius: 15px;
      box-shadow: 0px 0px 3px rgba(0,0,0,0.25);
      display: none;
  }
  
  .navbar .dd_menu .dd_left{
      background:hsla(240, 42%, 16%, 0.965);
      padding: 15px 20px;
      border-top-left-radius: 15px;
      border-bottom-left-radius: 15px;
  }
  
  .navbar .dd_menu .dd_left li{
      color: #fff;
  }
  
  .navbar .dd_menu .dd_right{
      padding: 15px 20px;
  }
  
  .navbar .dd_menu li{
      margin-bottom: 10px;
      color: #868686;
  }
  
  .navbar .dd_menu:before{
      content: "";
      position: absolute;
      top: -20px;
      right: 30px;
      border: 10px solid;
      border-color: transparent transparent #fff transparent;
  }
  
  .navbar .dd_main.active .dd_menu{
      display: flex;
  }
</style>