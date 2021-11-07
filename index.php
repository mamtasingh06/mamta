<?php

try{
    $conn = new PDO("mysql:host=localhost; dbname=employee_db;", "root", "");
   
    // insert data
    if(isset($_REQUEST['submit']))
    {
      if(($_REQUEST['first_name']=="")||($_REQUEST['last_name']=="")||($_REQUEST['email']=="")
      ||($_REQUEST['company_name']=="")||($_REQUEST['phone']=="")||($_REQUEST['project_type']=="")
      ||($_REQUEST['message']==""))
      {
        echo "<small >Fill all Fields</small>";
      }
      else{
          $firstname= $_REQUEST['first_name'];
          $lastname= $_REQUEST['last_name'];
          $email= $_REQUEST['email'];
          $cname= $_REQUEST['company_name'];
          $phone= $_REQUEST['phone'];
          $ptype= $_REQUEST['project_type'];
          $message= $_REQUEST['message'];
          $sql = "INSERT INTO details(first_name, last_name, email, company_name, phone, message, project_type)
           VALUES('$firstname', '$lastname', '$email', '$cname', '$phone', '$message', '$ptype')";
          $conn->exec($sql);
      }
    }
}
catch(PDOException $e){
echo "Connection failed" .$e->getMessage();

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Goggle Font -->

    <link href="https://fonts.googleapis.com/css2?family=Italianno&display=swap" rel="stylesheet">


    <!-- Font Awesome -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
    <!-- Bootstrap CSS-->

    <link rel="stylesheet" href="css/bootstrap.min.css">    
    <!-- Custom CSS -->
   
    <title>Test</title>
    <style>
      *{
    margin: 0px;
    padding: 0px;
    box-sizing:border-box;
} 
        .text{
          min-height:100vh;
width:100%;
background-image:linear-gradient(rgba(4,9,30,0.4),rgba(4,9,30,0.4)),url("images/img1.jpeg");
background-position:center;
background-size:cover;
position:relative;
border-bottom:5px solid greenyellow;
}
.text-box{
  width:90%;
  position:absolute;
  top:50%;
  left:50%;
  transform:translate(-50%, -50%);
  color:#FFFFFF;
  text-align:center;
}
      .text-box > h1 {
        font-size: 80px;
        text-align: right;
      }
      .wkimage1 {
        background-image:linear-gradient(rgba(4,9,30,0.4),rgba(4,9,30,0.4)),url("images/archi.jpeg");
        width: 550px;
        height: 300px;
        background-position:center;
background-size:cover;
position:relative;
      }
      
      .wkimage2{
        background-image:linear-gradient(rgba(4,9,30,0.4),rgba(4,9,30,0.4)),url("images/inter.jpeg");
        width: 550px;
        height: 300px;
        background-position:center;
background-size:cover;
position:relative;
      }
      
      .wkimage3 {
        background-image:linear-gradient(rgba(4,9,30,0.4),rgba(4,9,30,0.4)),url("images/endow.jpeg");
        width: 550px;
        height: 300px;
        background-position:center;
background-size:cover;
position:relative;
      }
      .wkimage4{
        background-image:linear-gradient(rgba(4,9,30,0.4),rgba(4,9,30,0.4)),url("images/web.jpeg");
        width: 550px;
        height: 300px;
        background-position:center;
background-size:cover;
position:relative;
      }
      .wkimage5 {
        background-image:linear-gradient(rgba(4,9,30,0.4),rgba(4,9,30,0.4)),url("images/med.jpeg");
        width: 550px;
        height: 300px;
        background-position:center;
background-size:cover;
position:relative;
      }
      .wkimage6{
        background-image:linear-gradient(rgba(4,9,30,0.4),rgba(4,9,30,0.4)),url("images/camra.jpeg");
        width: 550px;
        height: 300px;
        background-position:center;
background-size:cover;
position:relative;
      }
      
      .hover:hover{
       
        color: white;
        border: 2px solid whitesmoke;
       
      }
      .btnhvr:hover{
        background: yellowgreen;
      }
      .btnwrk:hover{
        background: black;
        color: white;
      }
      .logo  > img{
        width: 230px;
        height: 100px;
      }
      .last{
        background-image:linear-gradient(rgba(4,9,30,0.8),rgba(4,9,30,0.8)),url("images/last.jpeg");
        background-position:center;
background-size:cover;
position:relative;
      }
     .bi{
       font-size:20px;
     }
     .maindiv{
       width:100%;
     }
       width:100%;
     }
      @media  screen and (max-width:1020px) {
        .text-box > h1 {
          font-size: 40px;
        }
        
      }
    </style>
</head>


<nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top" id="nav1">
  <header class="bg-secondary header fixed-top">
    <ul class="nav justify-content-end ">
      <li class="nav-item ">
        <a class="nav-link active text-white" href="#">(213)894-9933 |</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white-50 fs-6" href="#">hello@spnixdigital.com</a>
      </li>
      
    </ul>
  </header>
    <div class="container-fluid nav mt-5">
      
      <a class="navbar-brand text-white" href="#index.html">
        <img class="ms-5" src="images/spinx-logo.png" alt="logo" style="width: 150px; height: 60px;">
      </a>
      <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon text-white"></span>
      </button>
      
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ">
          <li class="nav-item">
            <a class="nav-link active text-white" aria-current="page" href="#">WORK</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#">EXPERTISE</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#">PROCESS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#">AGENCY</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              RESOURCES
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
              <li><a class="dropdown-item" href="#">BLOG</a></li>
              <li><a class="dropdown-item" href="#">GUIDES</a></li>
              
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#">Contact Me</a>
          </li>  
        </ul>  
      </div>
    </div>
  </nav>
 
 
  <div class="container-fluid text">
   <div class="text-box">
     <h1 id="big">
     <b> BIG IDEAS,<br>
      CREATIVE PEOPLE,<br>
      NEW TECHNOLOGY.</b>
     </h1>
   </div>
  </div>
  <div class="container-fluid">
  <div class="row justify-items-start bg-dark">
    <div class="col-md-6  " >
      <div class="text-start p-5 text-boxone">
        
          <h1 style="font-size: 80px;">
            <b class="text-white">
              THINK <br>
            </b>
            <b style="color: greenyellow;"> BIG.</b>
          </h1>
        
        
          <h3>
            <b class="text-white">Web Design Company in Los Angeles</b>
          </h3>
        
        
          <p class="text-white ">
            At SPINX Digital, our team of innovators and digital marketers in tech and design bring skills
             above and beyond the ordinary to every project. Our Los Angeles web design and development team 
             is involved in professional B2B and B2C web design and development, mobile applications, digital 
             strategy, user experience, advertising, social media, content management systems, and email marketing
              initiatives.
          </p>
        <h5 style="color: greenyellow;">AWARD WINNING DIGITAL AGENCY</h5>
      </div>
    </div>
    <div class="col-md-6 mt-5">
      <div>
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="images/spinx2.jpg" class="d-block w-100" alt="spnix2">
              <div class="carousel-caption d-none d-md-block">
                <strong style="color: black;">PHYSICIANS FORMULA</strong>
                
              </div>
            </div>
            <div class="carousel-item">
              <img src="images/spinx3.jpg" class="d-block w-100" alt="spnix3">
              <div class="carousel-caption d-none d-md-block">
                <strong>QUINN EMANUEL</strong>
                
              </div>
            </div>
            <div class="carousel-item">
              <img src="images/spinx4.jpg" class="d-block w-100" alt="spnix4">
              <div class="carousel-caption d-none d-md-block">
                <strong style="color: black;">AIYA AMERICA</strong>
                
              </div>
            </div>
            <div class="carousel-item">
              <img src="images/spnix5.jpg" class="d-block w-100" alt="spnix5">
              <div class="carousel-caption d-none d-md-block">
                <strong style="color: black;">WET N WILD</strong>
               
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container-fluid">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <h3 class="text-center mt-5"><b>RECENT WORK</b></h3>
    <p class="mt-5">We have a deep understanding of user habits and behaviors. We are committed to using fact-based
       knowledge and our unique brand of innovation to help you dominate the competition. Every project is
        customized for optimum visibility and audience response.</p>
    </div>
  </div>
</div>
<div class="container mt-5">
  <div class="row justify-items-start">
   <div class="col-md-6 wkimage1">
     <div class="text-center mt-3 hover">
       <h3 class="pt-4">ARCHITECHTING THE USER EXPERIENCE & CREATIVES FOR UPLIFTING PAUL HASTINGS BRAND IMAGE</h3>
      <h6>Paul Hastings Website Redesign</h6>
      <button type="button" class="btn btn-dark btn-lg mt-5 mb-2 btnhvr" style="border:2px solid yellowgreen;">
        EXPLORE PROJECT</button></div>
   </div>
   <div class="col-md-6 wkimage2">
    <div class="text-center mt-3 hover">
      <h3 class="pt-4">CUTTING EDGE DESIGN TRANSFORMATION & A ROBUST WEBSITE FOR THIS GIANT LAW FIRM</h3>
     <h6>Willkie Insurtech Website Design & Development</h6>
     <button type="button" class="btn btn-dark btn-lg mt-5 mb-2 btnhvr" style="border:2px solid yellowgreen;">
       EXPLORE PROJECT</button>
    </div>
  </div>
  <div class="col-md-6 wkimage3">
    <div class="text-center mt-3  hover">
      <h3 class="pt-5">CREATING A BETTER CALIFORNIA WITH THE CALIFORNIA ENDOWMENT</h3>
    <h6>Rebranding The California Endowment</h6>
    <button type="button" class="btn btn-dark btn-lg mt-5 mb-2 btnhvr" style="border:2px solid yellowgreen;">
      EXPLORE PROJECT</button> 
    </div>
  </div>
  <div class="col-md-6 wkimage4">
    <div class="text-center mt-3  hover">
      <h3 class="pt-5">LIGHTING UP AN INTERNET PRESENCE FOR BEGA</h3>
     <h6>Bega Website Redesign</h6>
     <button type="button" class="btn btn-dark btn-lg mt-5 mb-2 btnhvr" style="border:2px solid yellowgreen;">
      EXPLORE PROJECT</button>
    </div>
  </div>
  <div class="col-md-6 wkimage5">
   <div class="text-center mt-3  hover">
    <h3 class="pt-5">A MEDICAL CONSULTIND GROUP'S WEBSITE GOES UNDER THE KNIFE</h3>
    <h6>BSM Consulting Website and Member Portal Strategy & Redesign</h6>
    <button type="button" class="btn btn-dark btn-lg mt-5 mb-2 btnhvr" style="border:2px solid yellowgreen;">
      EXPLORE PROJECT</button>
   </div>
  </div>
  <div class="col-md-6 wkimage6">
    <div class="text-center mt-3  hover">
      <h3 class="pt-5">PRODUCING A NEW VIDEO SPEC MARKETPLACE</h3>
    <h6>Spexster Web App Design & Development</h6>
    <button type="button" class="btn btn-dark btn-lg mt-5 mb-2 btnhvr" style="border:2px solid yellowgreen;">EXPLORE PROJECT</button>
    </div>
  </div>
  <div class="text-center mt-5">
  <a href="#"> <button type="button" class="btn btn-success btn-lg btnhvr btnwrk">VIEW MORE WORK</button></a>
  </div>
  </div>

</div>
<div class="container-fluid bg-dark mt-5 pb-5">
  <div class="row justify-content-center">
    <div class="col-lg-8 mt-5">
      <h3 class="text-center text-white" >
        <b>
          SELECT CLIENTS
        </b>
      </h3>
      <p class="text-white mt-5">
        We are proud to have some of the most well-known and respected corporate clients – but 
        we love to help start-ups and new brands too. We aren’t just talk. We are in the game, in a big way,
         and are ready to partner <br> with you.
      </p>
    </div>

  </div>
<div class="row  mt-5 ">
  <div class="col-lg-2 logo">
    <img src="images/c1.png" alt="c1">
  </div>
  <div class="col-lg-2 logo">
    <img src="images/c2.png" alt="c2">
  </div>
  <div class="col-lg-2 logo">
    <img src="images/c3.png" alt="c3">
  </div>
  <div class="col-lg-2 logo">
    <img src="images/c4.png" alt="c4">
  </div>
  <div class="col-lg-2 logo">
    <img src="images/c5.png" alt="c5">
  </div>
  <div class="col-lg-2" >
    <img style="width: 210px; height: 100px;" src="images/c6.png" alt="c6">
  </div>
  <div class="col-lg-2 logo">
    <img src="images/c7.png" alt="c7">
  </div>
  <div class="col-lg-2 logo">
    <img src="images/c8.png" alt="c8">
  </div>
  <div class="col-lg-2 logo">
    <img src="images/c9.png" alt="c9">
  </div>
  <div class="col-lg-2 logo">
    <img src="images/c10.png" alt="c10">
  </div>
  <div class="col-lg-2 logo">
    <img src="images/c11.png" alt="c11">
  </div>
  <div class="col-lg-2">
    <img  style="width: 210px; height: 100px;" src="images/c12.png" alt="c12">
  </div>
</div>
</div>
<div class="container-fluid pt-5 bg-light">
  <div class="row justify-content-center">
   <div class="col-lg-8">
     <h3 class="text-center">
       <b>EXPERTISE</b>
     </h3>
     <p class="mt-5">We are innovators in creative web design in Los Angeles. We don’t play any guessing games,
        but seek the facts from a range of analytics to help you get the edge.</p>
   </div>
  </div>
  <div class="row  mt-5 justify-content-evenly">
    <div class="col-lg-3  bg-white">
      <div class="p-5">
        <h3>
        <b>  DISCOVERY</b>
        </h3>
        <P>
          A through discovery is at the core of every successful digital solution we craft. Understanding 
          who you are building for and why you are building it is more important than the colors or technology you use.
          If you don't know these things first, the rest is pointless.
        </P>
        <h5 style="color: yellowgreen;">EXPLORE SERVICES</h5>
      </div>
    </div>
    <div class="col-lg-3  bg-white">
      <div class="p-5">
        <h3>
          <b>DISCOVERY</b>
        </h3>
        <P>
          A through discovery is at the core of every successful digital solution we craft. Understanding 
          who you are building for and why you are building it is more important than the colors or technology you use.
          If you don't know these things first, the rest is pointless.
        </P>
        <h5 style="color: yellowgreen;">EXPLORE SERVICES</h5>
      </div>
    </div>
    <div class="col-lg-3 bg-white">
      <div class="p-5">
        <h3>
          <b>DISCOVERY</b>
        </h3>
        <P>
          A through discovery is at the core of every successful digital solution we craft. Understanding 
          who you are building for and why you are building it is more important than the colors or technology you use.
          If you don't know these things first, the rest is pointless.
        </P>
        <h5 style="color: yellowgreen;">EXPLORE SERVICES</h5>
      </div>
    </div >
    
  </div>
  <div class="row justify-content-evenly mt-5">
    <div class="col-lg-3 bg-white">
      <div class="p-5">
        <h3>
          <b>DISCOVERY</b>
        </h3>
        <P>
          A through discovery is at the core of every successful digital solution we craft. Understanding 
          who you are building for and why you are building it is more important than the colors or technology you use.
          If you don't know these things first, the rest is pointless.
        </P>
        <h5 style="color: yellowgreen;">EXPLORE SERVICES</h5>
      </div>
    </div>
    
    <div class="col-lg-3  bg-white">
      <div class="p-5">
        <h3>
          <b>DISCOVERY</b>
        </h3>
        <P>
          A through discovery is at the core of every successful digital solution we craft. Understanding 
          who you are building for and why you are building it is more important than the colors or technology you use.
          If you don't know these things first, the rest is pointless.
        </P>
        <h5 style="color: yellowgreen;">EXPLORE SERVICES</h5>
      </div>
    </div>
    <div class="col-lg-3 bg-white">
      <div class="p-5">
        <h3>
          <b>DISCOVERY</b>
        </h3>
        <P>
          A through discovery is at the core of every successful digital solution we craft. Understanding 
          who you are building for and why you are building it is more important than the colors or technology you use.
          If you don't know these things first, the rest is pointless.
        </P>
        <h5 style="color: yellowgreen;">EXPLORE SERVICES</h5>
      </div>
    </div >
    
  </div>
  
  

</div>
<div class="container-fluid bg-dark mt-5">
  <div class="row justify-content-center ">
    <div class="col-lg-8">
     <h3 class="text-white text-center mt-5"><b>SPINX PROCESS</b></h3>
     <p class="text-white">Our team of website experts will handle the entire development lifecycle of your project,
        from your website idea to the web development services needed to the publishing. Our website
         development cycle consists of the steps below:</p>
    </div>
  </div>
  
  
     
      <ol class="list-inline text-center mt-5 pb-3">
        
        <li class="list-inline-item text-white">1. DISCOVERY</li>
      
      
        <li class="list-inline-item text-white ms-3">2. STRATEGIC ARCHITECTURE</li>
     
        <li class="list-inline-item text-white ms-3">3. UI DESIGN</li>
      
      
        <li class="list-inline-item text-white ms-3">4. PROGRAMMING</li>
      
        <li class="list-inline-item text-white ms-3">5. QUALITY CONTROL</li>
      
     
        <li class="list-inline-item text-white ms-3">6. LAUNCH</li>
      
        
        
        
        
        
      </ol>
     
   
  
</div>


    
      
</div>
<div class="container-fluid last mt-5">
  <h1 class=" mb-3 text-center pt-5" style="color: yellowgreen;">Contact Us</h1>
  <div class="row text-white justify-content-center mb-5">
    <div class="col-lg-6 mb-5">
      <form action="" method="POST">
        <div class="row ">
          <div class="form-group col-lg-6 ">
             <label for="inputName" class="mb-2 text-white">First Name *</label>
             <input type="text" class="form-control bg-secondary" name="first_name" id="inputName">
          </div>
        
          <div class="form-group col-lg-6 ">
            <label for="inputName" class="mb-2 text-white">Last Name *</label>
            <input type="text" class="form-control bg-secondary" name="last_name" id="inputName">
         </div>
          <div class="form-group col-lg-6 ">
              <label for="inputEmail" class="mb-2 text-white">Your Email *</label>
              <input type="email" class="form-control bg-secondary" name="email" id="inputEmail" required>
           </div>
        
          
        <div class=" form-group col-lg-6 mb-1 ">
          <label for="inputText" class="my-2 text-white">Company's Name</label>
          <input type="text" class="form-control bg-secondary" name="company_name" id="inputText" required></input>
       </div>
       <div class=" form-group col-lg-6 mb-1 ">
        <label for="inputText" class="my-2 text-white">Phone *</label>
        <input type="tel" class="form-control bg-secondary" name="phone" id="inputText" required></input>
      </div>
     <div class=" form-group col-lg-6 mb-1 ">
      <label for="exampleDataList" class="form-label text-white">Project Type Product *</label>
    <input class="form-control bg-secondary"  list="datalistOptions" name="project_type" id="exampleDataList" 
    placeholder="Please Select">
    <datalist id="datalistOptions">
      <option value="Discovery/Strategy">
      <option value="User Experience">
      <option value="Website Design">
      <option value="Website Development">
      <option value="Application Development">
        <option value="Mobile App">
          <option value="E-Commerce">
          <option value="Marketing/Advertising">
          <option value="Social Media">
          <option value="Other">
    </datalist>
    </div>
        
       <div class=" form-group col-lg-6 mb-3 ">
          <label for="inputTextarea" class="my-2 sb-scroll text-white ">Message *</label>
          <textarea class="form-control bg-secondary" id="inputTextarea" name="message" required></textarea>
       </div>
       
      </div>
       <div class=" form-group col-lg-6 mb-3 ">
        <input class="form-check-input me-1 " type="checkbox" value="" aria-label="...">
        <span class="text-white">Receive monthly updates covering marketing, strategy, design, and all things digital. 
          No spam, we promise.</span>

          <button class="btn btn-primary btn-lg ms-5 mt-5" name="submit" type="submit">Submit</button>
          
       
      
      </form>
      
      </div>
      
      </div>
      <div class="container-fluid">
        <div class="row ">
        <div class="col-lg-6  offset-10">
        
        <a href="index.php"> <i class="bi bi-arrow-up bi-2x" style="font-size:30px; background:yellowgreen;
        color:white"></i></a>
        
          </div>
          <div class="col-lg-6  offset-9 mt-3">
          <ul class="list-unstyled list-inline ">
          <li class="list-inline-item "><i class="bi bi-linkedin"></i></li>
          <li class="list-inline-item ms-5"><i class="bi bi-twitter"></i></li>
          <li class="list-inline-item ms-5"><i class="bi bi-facebook"></i></li>
          
        </ul>
          </div>
        </div>
        
        </div>
      <footer class="ms-5 mb-5 text-center">
        &copy; 2021 SPINX Digital All Rights Reserved | Privacy Policy | Sitemap
        
      
      </footer>
      
      </div>
      
      </div>
     
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.js"></script>
<script src="js/popper.js"></script>
<script src="js/custom.js"></script>
</body>
</html>