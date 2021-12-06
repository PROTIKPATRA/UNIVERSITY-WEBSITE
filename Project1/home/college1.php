<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>college website</title>
    <link rel="stylesheet" href="style31.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
<link href="https://fontawesome.com/v4.7.0/icons" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>  
<?php require_once "search.php" ?>
<?php
        if (isset($_SESSION['message'])): ?>
      <div class="alert alert-<?=$_SESSION['msg_type']?>">
      <?php
      echo $_SESSION['message'];
      unset($_SESSION['message']);
      ?>
      </div>
<?php endif; ?>
    <section class="header">
        <nav>
            <div class="nav-links" id="navlink">
                <i class="fa fa-times" onclick="hidemenu()"></i>
                <ul>
                    <li><a href="home.html">HOME</a></li>
                    <li><div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
    ADMISSION
  </button>
  <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
    <li><a class="dropdown-item " href="admission.html">POST GRADUATE</a></li>
    <li><a class="dropdown-item" href="ele.html">UNDER GRADUATE</a></li>
    <li><a class="dropdown-item" href="elegible_candidate.html">ELEGIBILE CANDIDATE</a></li>

  <li><hr class="dropdown-divider"></li>
        </ul>
</div>               
<li>
                    
<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
    DEPARTMENT
  </button>
  <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
    <li><a class="dropdown-item " href="#">ARTS</a></li>
    <li><a class="dropdown-item" href="commerce.html">COMMERCE</a></li>
    <li><a class="dropdown-item" href="science.html">SCIENCE</a></li>
    <li><hr class="dropdown-divider"></li>
  </ul>
</div>
                </li>
                    <li><a href="contact.html">ACHIEVEMENTS</a></li>
                    <li><a href="gallary.html">GALLERY</a></li>
                    <li><a href="faculty.html">FACULTY</a></li>
                    <li>
                        <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
    STUDENT
  </button>
  <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
    <li><a class="dropdown-item " href="#">Student Support Service</a></li>
    <li><a class="dropdown-item" href="#">Skill Development Programe</a></li>
    <li><a class="dropdown-item" href="scholarship.html">Scholarship</a></li>
    <li><a class="dropdown-item " href="anti-ragging.html">Anti-Ragging Cell </a></li>
    <li><hr class="dropdown-divider"></li>
  </ul>
</div></li>
                    <li><a href="about us.html">ABOUT US</a></li>
                    <li><a href="contact us .html">CONTACT US</a></li>
                    <li><a href="javascript:show()">LOGIN</a></li>
                </ul>
            </div>
            <i class="fa fa-bars"onclick="showmenu()"></i>
        </nav>
    		<div class="square"></div>
        	<div class="square" style="left:24.5%;opacity:0.8;"></div>
        	<div class="square" style="left:34%;opacity:0.6;"></div>
        	<div class="square" style="left:41.5%;opacity:0.4;"></div>
            <div class="square" style="left:49%;opacity:0.2;"></div>
        <div class="text-box">
            <h1>RAVENSWOOD COLLEGE</h1>
            <P><b>Ravenswood College was esblished 18th August,1967.this college was selected by the ministry of Social Awarness Development,This college improving,upgrading and Modernizing the infrastructure.<br>
              Our college affiliated with the xyz university and abc university.</b>
        </P>
            <a href="college.html"class="hero-btn">visit to know more</a>
        </div>
        </section>
        <div class="notice">
            <h1>NOTICE BOARD</h1>
        </div>
        <!------------------NEWS&ANNUNCEMENTS--------------------->
 <div class="alined">
 		<div class="NOTICE news">
            
                <div class="image">
                    <img src="Document.jpg" alt="">
                </div>
                <div class="title">
                    <h1> NEWS & ANNOUNCEMENT </h1>
                </div>
                <div class="des">
                    <p>This is Our News & Announment section Here you will publish our regular Notice </p>
                    <ul>
                        <li><a href="soon.html"> admission 2021</a></li>
                        <li><a href="soon.html">  college closed</a></li>
                        <li><a href="soon.html">  tender passed</a> </li>
                        <li> <a href="soon.html"> competition</a> </li>
                        <li> <a href="soon.html"> submit your projects</a> </li>
                    </ul>
                    <button>read more...</button>
                </div>
        </div>
        <!----------------------------QUICK LINKS------------------------->
        <div class="NEWS news">
                <div class="image">
                    <img src="QUICK_LINKS.jpg" alt="">
                </div>
                <div class="title">
                    <h1> QUICK LINKS </h1>
                </div>
                <div class="des">
                    <p>This is the Quick Link section here You can access you nessesary links</p>
                    <ul>
                        <li><a href="soon.html"> fee structure</a> </li>
                        <li><a href="soon.html"> schemes</a></li>
                        <li><a href="soon.html">  annual sports</a> </li>
                        <li><a href="soon.html"> summer camp </a></li>
                        <li> <a href="soon.html"> Ncc</a></li>
                        <li> <a href="soon.html"> campus</a> </li>
                    </ul>
                    <button>read more...</button>
                </div>
        </div>
</div>
        <!-------------courses------------>
<section class="course">
    <h1>courses we offer</h1>
    <p>Ravenswood Offers you some outstanding courses
    </p>
    <div class="row">
        <div class="course-collumn right">
            <h3>intermediate</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.Dolorem, beatae? Corrupti, minima. Id architecto ab aliquid totam numquam officia natus!
            </p>
        </div>
            <div class="course-collumn right">
                <h3>degree</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.Dolorem, beatae? Corrupti, minima. Id architecto ab aliquid totam numquam officia natus!
                </p>
            </div>
                <div class="course-collumn">
                    <h3>post-graduation</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.Dolorem, beatae? Corrupti, minima. Id architecto ab aliquid totam numquam officia natus!
                    </p>
                </div>
    </div>
</section>
<!----------------------gallary------------------------>
<fieldset>
	<legend><h1>Gallery</h1></legend>
<div class="container">
  <div class="grid w-3">
	<div class="parts">
		<div class="text"></div>
		<div class="img"><img src="IMG-20210625-WA0001.jpg"></div>
	</div>
  </div>
  <div class="grid w-2 h-2">
	<div class="parts">
		<div class="text"></div>
		<div class="img"><img src="gallary.jpg"></div>
	</div>
  </div>
  <div class="grid h-2">
	<div class="parts">
		<div class="text"></div>
		<div class="img"><img src="cafeteria.jpg"></div>
	</div>
  </div>
  <div class="grid w-2">
	<div class="parts">
		<div class="text"></div>
		<div class="img"><img src="IMG-20210625-WA0012.jpg"></div>
	</div>
  </div>
  <div class="grid">
	<div class="parts">
		<div class="text"></div>
		<div class="img"><img src="basketball.jpg"></div>
	</div>
  </div>
  <div class="grid w-2">
	<div class="parts">
		<div class="text"></div>
		<div class="img"><img src="IMG-20210625-WA0004.jpg"></div>
	</div>
  </div>
  <div class="grid">
	<div class="parts">
		<div class="text"></div>
		<div class="img"><img src="IMG-20210625-WA0000.jpg"></div>
	</div>
  </div>
</div>
</fieldset>
<a href="gallary.html"class="edi-btn">view more</a>
<!----------------------------------------Department--------------------------------------->
<section class="department">
    <h1>Department </h1>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium nemo reprehenderit, eum.</p>
<div class="row">
    <div class="department-col">
        <img src="science.jpg">
        <h3>SCIENCE</h3>
        <p>THIS IS OUR DEARTMENT OF SCIENCE</p>
    </div>
    <div class="department-col">
        <img src="commerce.jpg">
        <h3>COMMARCE</h3>
        <p>THIS IS OUR DEARTMENT OF COMMERCE</p>
    </div>
    <div class="department-col">
        <img src="arts.jpg">
        <h3>ARTS </h3>
        <p>THIS IS OUR DEARTMENT OF ARTS</p>
    </div>
    <div class="department-col">
        <img src="general.jpg">
        <h3>general</h3>
        <p>THIS IS OUR GENERAL SECTION</p>
    </div>
</div>
</section>
        <!--------------------------------facility--------------------------------------------->
<section class="facility">
    <h1>our facilities</h1>
<p>We offer many facilities to our Student</p>
<div class="row">
    <div class="facilities-col">
        <img src="library.jpg">
        <h3> word best library</h3>
        <p>We can say that our college is having best library as in every week new books are provided by the system to the students to learn in a easy and simple fashion</p>
    </div>
    <div class="facilities-col">
        <img src="cafeteria.jpg">
        <h3>best canteen</h3>
        <p>Ravenswood has 3 canteens, those three are clean, modern and food quality also very good, and the food prices are efortadale</p>
    </div>
    <div class="facilities-col">
        <img src="basketball.jpg">
        <h3>world class basketball ground </h3>
        <p>Ravenswood has a large Basketball court and we have also a famous Basketball team and our many students are in the national representative. and this is also Ravenswood singnature </p>
    </div>
    <div class="facilities-col">
        <img src="premises.jpg">
        <h3>large Campus</h3>
        <p>The college main building is G+4-storied with more than two thousand square meters covered area, and is fully furnished with state-of-the-art features. The high quality physical infrastructure along with a very congenial, green and serene ambiance makes the institution an ideal seat of learning.</p>
    </div>
</div>
</section>
       <!------------------------------testimonials----------------------->
<section class="testimonials">
    <h1>what our student says</h1>
<p>This is the review section of Our college all our students are welcome to share your experiences </p>
<div class="row">
    <div class="testimonial-col">
        <img src="user1.jpg">
        <div>
            <p><b>College Infrastructure</b><br><br>
It is an amazing college and extremelyy beautiful campus. It has most of the facilities. However, some of them might need maintenance. The college also needs to be more disabled-friendly. Rest, it's very well maintained. <br> <br>
<b>Academics</b><br><br>
The teachers of the college are excellent and do their best to make students feel welcome. They clear all doubts and the college is a very enlightening space to study and learn about things. 10/10 recommend. <br> <br>
            <h3>sarmistha mondal</h3>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half-o"></i>
        </div>
    </div>
    <div class="testimonial-col">
        <img src="user2.jpg">
        <div>
            <p><b>College Infrastructure</b><br><br>
The college has a very good infrastructure and the campus is very well planned and designed, each and every class has own smart board and audio system and the auditorium is very well modernized and can hold a large number of audience <br> <br>
<b>Academics</b><br><br>
The syllabus follwed is anna university and it is affiliated not autonomous and the quality of teaching is excellent and the staffs are very experienced in their field and they support the students and very friendly <br> <br>
           <span><h3>rohan chowdhury</h3>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-o"></i>
        </span> 
        </div>
    </div>
</div>
<!--------------------other-------------------------->
<section class="other">
<p>
    copyright  2021 xampp. all rights reserved<br>
    <i>powered by</i>: cloudflare - THE GREEN MICROCLOUD<br>
    privecy policy &nbsp;  FAQ
</p>

</section>
</section>

<!-- to create background interphase -->

<div style="width:100vw;height:100vh;background-color:rgba(25,25,25,0.4);visibility:hidden;
      position:fixed;top:0%;left:0%;" id="iphase"></div>

<!-- log in form -->

<div id="form" class="row justify-content-center" style="padding:20px;position:fixed;top:50%;left:50%;
      transform:translate(-50%,-50%);border:1px solid black;border-radius:5px;background:white;visibility:hidden;">

      <form action="search.php" method="post">
          <i class="fa fa-times-circle" style="display:flow-root;" id="close" ></i>
        <div class="form-group">
          <label>Username</label>
          <input type="text" name="reg-Id" class="form-control" placeholder="Enter Registration id">
        </div>
        <div class="form-group">
          <label>Password</label>
          <input type="password" name="Password" class="form-control" placeholder="Enter atleast 6 characters">
        </div>
          <button type="submit" class="btn btn-primary" name="submit" 
          style="align-items: flex-end;" onclick="message()">Log-in</button>
      </form>
  </div>


         <!----------------using javascript to toggle the menu----------------->
    <script>
        var navlink= document.getElementById("navlink");
        function showmenu(){
            navlink.style.right="0";
        }
        function hidemenu(){
            navlink.style.right="-200px";
        }
        var form = document.getElementById("form")
        var focus = document.getElementById("iphase")
        var close = document.getElementById('close');

        function show() {
            form.style.visibility = "visible"
            focus.style.visibility = "visible"
        }
</script>
<!-- <script>
        // function hide() {
        //     form.visibility = "hidden"
        //     focus.visibility = "hidden"
        // }

        // function message() {
        //     setTimeout(function() {
        //         var msg = 
        //         alert(msg)
        //     }, 500);
            
        }
        </script> -->
</body>
</html>
</body>
</html>