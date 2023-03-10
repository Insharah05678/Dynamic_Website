<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>JUW | FYP | SupervisorPage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <!--link rel="stylesheet" href="./style_sup.css"-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
  </head>
  <body>
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

<div class="wrapper">
	<div class="navbar">

		<div class="logo">
      <img src="/FYP Automation System2/images/o.png" alt="JUW" href="#!" style="cursor: pointer; width: 35%; margin-left: -4%; margin-top: 0%;" >
			
		</div>
		<div class="nav_right">
			<ul>
				<li class="nr_li dd_main">
					<img src="/FYP Automation System2/images/y.png" alt="profile_img"  style="margin-left: 50%;"><p><strong>Supervisor Name</strong></p>
					
					<div class="dd_menu">

						<div class="dd_right">
							<ul>

              <li onclick="location.href = '../Sup_Landing Page/profile.php';">Profile</li>
								<li onclick="location.href = '../Std_Landing Page/not.php';">Notification</li>
								<li onclick="location.href = '../Std_Landing Page/sett.php';">Preferences</li>
								<li onclick="location.href = '../Login Form/logout.php';">Log Out</li>

							</ul>
						</div>
					</div>
				</li>
				<li class="nr_li">
          <i class="fas fa-solid fa-angle-down"></i>
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
        
      <div class="row flex-grow-sm-1 flex-grow-0 " style="cursor: pointer; margin-top: -3%; margin-left: -4%; display: flex;">
          <aside class="col-sm-3 mt-3 flex-grow-sm-1 flex-shrink-1 flex-grow-0 sticky-top pb-sm-0 pb-3">
              <div class="p-1 h-100 sticky-top">
                  <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" style="background-color: #b7d1e2;"id="menu">
                      <li class="nav-item ">
                          <a href="#" class="nav-link align-middle px-0">
                            <i class="material-icons text-dark">menus</i><span class="ms-1 d-none d-sm-inline text-dark"style="font-size: 22px;">DASHBOARD</span></a>
                          <div class="mb-4 text-dark w-500 h-500"><!-- Solid divider -->
                            <hr class="solid">
                          </div>
                          <a href="#" class="nav-link align-middle px-0">
                            <span class="ms-1 d-none d-sm-inline text-dark"style="font-size: 20px;"> CS Program</span></a>
                             
                          <div class="mb-4 text-dark w-500 h-500"><!-- Solid divider -->
                            <hr class="solid">
                          </div>
                              
                          <a href="/FYP Automation System2/Sup_Landing Page/project individual pages/index_cs2.php" class="nav-link px-0 align-middle">
                            <span class="ms-1 d-none d-sm-inline text-dark" style="font-size: 18px;">CSPROJ-12</span> </a>

                          <a href="/FYP Automation System2/Sup_Landing Page/project individual pages/index_cs2.php" class="nav-link px-0 align-middle">
                              <span class="ms-1 d-none d-sm-inline text-dark" style="font-size: 18px;">CSPROJ-13</span> </a>

                          <a href="/FYP Automation System2/Sup_Landing Page/project individual pages/index_cs3.php" class="nav-link px-0 align-middle">
                              <span class="ms-1 d-none d-sm-inline text-dark"style="font-size: 18px;">CSPROJ-14</span> </a>

                          <!--<a href="#" class="nav-link px-0 align-middle">
                              <span class="ms-1 d-none d-sm-inline text-dark" style="font-size: 18px;">Mid 1</span></a>

                          <a href="#" class="nav-link px-0 align-middle">
                              <span class="ms-1 d-none d-sm-inline text-dark" style="font-size: 18px;">FYP 1</span></a>

                          <a href="#" class="nav-link px-0 align-middle">
                              <span class="ms-1 d-none d-sm-inline text-dark" style="font-size: 18px;">Mid 2</span></a>
                              
                          <a href="#" class="nav-link px-0 align-middle">
                              <span class="ms-1 d-none d-sm-inline text-dark" style="font-size: 18px;">FYP 2</span></a>
          
                          <a href="#" class="nav-link px-0 align-middle">
                              <span class="ms-1 d-none d-sm-inline text-dark" style="font-size: 18px;">Deliverables</span></a>

                          <a href="#" class="nav-link px-0 align-middle">
                              <span class="ms-1 d-none d-sm-inline text-dark"style="font-size: 18px;">Posters</span></a>-->
                      </li>
                  </ul> 
              </div>
          </aside>
          
          
      </div>



      <div class="container h-100 body-frame " style="margin-top: -15%; margin-left: 7%;" >
        <div class=" text-white d-flex justify-content-center align-items-center h2" style="margin-left: 20%; width: 70%; background-color:  #191930ef; margin-top: -20%; font-size: 25px; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">COMPUTER SCIENCE & SOFTWARE ENGINEERING DEPARTMENT <br> CS-2019  |  Project Handling Final Year Project List </div>
        <br><br><div class="row d-flex justify-content-center align-items-center">
          <div class="col-lg-8 col-xl-10" >
            <div class="card text-black"  style="border:none; margin-left: 10px;">
              
              <div>
                
                <table class="table table-striped container" style="cursor: pointer;">
                  <thead>
                    <tr>
                      <!--<th class="tableHead" scope="col" colspan="5">Project Name/ Project ID</th>-->
                    </tr>
                    <br>
                  </thead>
                  <tbody>
                    <tr class="table" style="background-color:  #b7d1e2;">
                      <th scope="row" >S.No</th>
                      <th scope="row">Project Codes</th>
                      <th scope="row">Project Names</th>
                      <!--th scope="row">Supervisor Name</th>
                      <th scope="row">External Name</th-->
                      <th scope="row">Member Names</th>
                      <th scope="row">Status</th>
                      <th scope="row">Submission Date</th>
                    </tr>
                    <tr>
                      <th scope="row">1</th>
                      <th onclick="location.href = '/FYP Automation System2/Sup_Landing Page/project individual pages/index_cs1.php';">CSPROJ-12</th>
                      <td>Smart Planting</td>
                      <!--td>Ms. Anisa</td>
                      <td>Sir. Zeeshan</td-->
                      <td>Afifa Sultaa, Rabia, Fatima, Sohema Anwar, Umaima Muzammil</td>
                      <td>Complete</td>
                      <td>03 - November - 2022</td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <th onclick="location.href = '/FYP Automation System2/Sup_Landing Page/project individual pages/index_cs2.php';">CSPROJ-13</th>
                      <td>DeFear</td>
                      <!--td>Ms. Narmeen</td>
                      <td>Ms. Kanwal</td-->
                      <td>Kainat Nasir, Manahil Azhar, Umna Khan</td>
                      <td>Complete</td>
                      <td>15 - November - 2022</td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <th onclick="location.href = '/FYP Automation System2/Sup_Landing Page/project individual pages/index_cs3.php';">CSPROJ-14</th>
                      <td>Silai Karhai </td>
                      <!--td>Ms. Soomaiya Hamid</td>
                      <td>Ms. Kanwal</td-->
                      <td>Hafsa Abbasi, Manal Fouad, Marium Imran, Mehak Dayalal</td>
                      <td>Complete</td>
                      <td>3 - Decemeber - 2022</td>
                    </tr>
                    <!--<tr>
                      <th scope="row">3</th>
                      <th>SRS</th>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr>
                      <th scope="row">4</th>
                      <th>Mid 1</th>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr>
                      <th scope="row">5</th>
                      <th>FYP 1</th>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr>
                      <th scope="row">6</th>
                      <th>Mid 2</th>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr>
                      <th scope="row">7</th>
                      <th>FYP 2</th>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr>
                      <th scope="row">8</th>
                      <th>Deliverables</th>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr>
                      <th scope="row">9</th>
                      <th>Posters</th>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>-->
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>



<br>
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
      <pre><p>5 Nazimabad Road no: 03 Karachi, 746000 Pakistan  |  Telephone: (92-21) 36620857-59 </p></pre>
      
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
    ?? 2022. All rights reserved.
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
