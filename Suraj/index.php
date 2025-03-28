<?php
include('db.php');
if($_SERVER['REQUEST_METHOD']=="POST")
{
  //for posting value
  $name=$_POST['name'];
  //echo $name;
  $mobile=$_POST['mobile'];
  $email=$_POST['email'];
  $message=$_POST['message'];
  
  // inserting value
  $ins="insert into pfeedback (name,mobile,email,message,datetime
  ) values('$name','$mobile','$email','$message',now())";
  $status=mysqli_query($con,$ins);
  if($status)
  {
    echo"<script>alert('Thanks for Contact me, Please make a call to me.')
      window.location='index.php'</script>";
  }
  else
  {
    echo"<script>alert('Sorry, Please try again.')
      window.location='index.php'</script>";
  }

}
?>

<!doctype html>
<html lang="en">
  <head>
  <meta name="google-site-verification" content="kn5qgP9rNsTzjSJD9TJWVhjL4Wb1QjNYNOD7G18DD3k" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <script src="js/port.js"></script>
    <title>Suraj's Portfolio</title>
    <link rel="icon" href="images/fav1.gif" type="images/fav1.gif">

<!-- Meta Tags Start-->

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Title: The title of your page (appears in search results and browser tab) -->
    <title>Your Page Title - Keywords or Brand Name</title>

    <!-- Description: A brief summary of your page content -->
    <meta name="description" content="I am a passionate software developer with a strong foundation in coding languages like Java, Python, and JavaScript. As a fresher, I am eager to contribute to innovative projects, solve real-world problems, and grow in a dynamic work environment. Looking for entry-level opportunities in software development, web development, and app development. Ready to bring fresh ideas and dedication to your team.">


    <!-- Keywords: Add relevant keywords related to your content -->
    <meta name="keywords" content="Suraj, surajkumar, software_engineer, Suraj_portfolio, portfolio, frontend_web_developer, python_developer, best_software_engineer,swesoftech ">

    <!-- Author: Who created the content -->
    <meta name="author" content="Swe Softech Pvt. Ltd.">

    <!-- Robots: Tell search engines how to index your page -->
    <meta name="robots" content="index, follow">

    <!-- Open Graph Tags (optional, but helps with social media sharing) -->
    <meta property="og:title" content="Your Page Title for Social Media">
    <meta property="og:description" content="A short and engaging description for social sharing.">
    <meta property="og:image" content="URL to an image representing your page content">
    <meta property="og:url" content="http://www.surajkumar.unaux.com">

    <!-- Twitter Card Tags (optional) -->
    <meta name="twitter:title" content="Your Twitter Title">
    <meta name="twitter:description" content="Your Twitter Description">
    <meta name="twitter:image" content="URL to an image for Twitter">
    <meta name="twitter:card" content="summary_large_image">


 <!-- Meta Tags Ends-->
  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <!--Navbar Start-->
    <header>
        <nav class="navbar navbar-expand-lg bg-light fw-bold fixed-top">
            <div class="container-fluid">
              <a class="navbar-brand text-center" href="index.php">Suraj</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#home">Home</a>
                  </li>
                 
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#about" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      About
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#co">Career Objective.</a></li>
                      <li><a class="dropdown-item" href="#we">Work-Experience.</a></li>
                      <li><a class="dropdown-item" href="#eq">Educational Qualifications.</a></li>
                      <li><a class="dropdown-item" href="#ac">Achievements & Certifications.</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#cm">Something else here</a></li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#project">Project</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#internship">Internships</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#skills">Skills</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#work">Work</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#cm">Contact Me</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
    </header>
    
    <!-- Navbar ends-->

    <section style="padding:80px 0px 0px 50px;" id="home">
    
    
      <div class="container" >
        <div class="row" >
          <div class="col-md-6">
            
            <h1 class="homeSur">Hi, <br>I am <span class="highlight">Suraj <br> Kumar Sharma.</span></h1>
             <h5 style="margin: 5px;">Software Engineer,<br> Web Developer & Youtuber.</h5>

          <!--Icons start -->
          
          <div class="HomeIcon" style="text-decoration: none;">
                <!--Linkedin Icon-->
                    
                                <a href="https://www.linkedin.com/in/suraj-kumar-sharma-0a67382a7" target="_blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16" style="margin: 8px;">
                                        <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z"/>
                                    </svg>
                                </a>
                                
                                <!-- Github Icon with anchor tag -->
                                <a href="https://github.com/Suraj83405" target="_blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16" style="margin: 8px;">
                                        <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27s1.36.09 2 .27c1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.01 8.01 0 0 0 16 8c0-4.42-3.58-8-8-8"/>
                                    </svg>
                                </a>
                
                                <!-- Youtube Icon with anchor tag -->
                                <a href="https://youtube.com/@surajkumarsharma2358?si=5tO-VWdXS7RvR6qu" target="_blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16" style="margin: 8px;">
                                        <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.01 2.01 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.01 2.01 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31 31 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.01 2.01 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A100 100 0 0 1 7.858 2zM6.4 5.209v4.818l4.157-2.408z"/>
                                    </svg>
                                </a>
                
                                <!-- Email Icon with anchor tag -->
                                <a href="mailto:surajkumarsharna.83405@gmail.com" target="_blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-envelope-at-fill" viewBox="0 0 16 16" style="margin: 8px;">
                                        <path d="M2 2A2 2 0 0 0 .05 3.555L8 8.414l7.95-4.859A2 2 0 0 0 14 2zm-2 9.8V4.698l5.803 3.546zm6.761-2.97-6.57 4.026A2 2 0 0 0 2 14h6.256A4.5 4.5 0 0 1 8 12.5a4.49 4.49 0 0 1 1.606-3.446l-.367-.225L8 9.586zM16 9.671V4.697l-5.803 3.546.338.208A4.5 4.5 0 0 1 12.5 8c1.414 0 2.675.652 3.5 1.671"/>
                                        <path d="M15.834 12.244c0 1.168-.577 2.025-1.587 2.025-.503 0-1.002-.228-1.12-.648h-.043c-.118.416-.543.643-1.015.643-.77 0-1.259-.542-1.259-1.434v-.529c0-.844.481-1.4 1.26-1.4.585 0 .87.333.953.63h.03v-.568h.905v2.19c0 .272.18.42.411.42.315 0 .639-.415.639-1.39v-.118c0-1.277-.95-2.326-2.484-2.326h-.04c-1.582 0-2.64 1.067-2.64 2.724v.157c0 1.867 1.237 2.654 2.57 2.654h.045c.507 0 .935-.07 1.18-.18v.731c-.219.1-.643.175-1.237.175h-.044C10.438 16 9 14.82 9 12.646v-.214C9 10.36 10.421 9 12.485 9h.035c2.12 0 3.314 1.43 3.314 3.034zm-4.04.21v.227c0 .586.227.8.581.8.31 0 .564-.17.564-.743v-.367c0-.516-.275-.708-.572-.708-.346 0-.573.245-.573.791"/>
                                    </svg>
                                </a>
                
                                <!-- Whatsapp Icon with anchor tag -->
                                <a href="https://wa.me/8340596877" target="_blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16" style="margin: 8px;">
                                        <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"/>
                                    </svg>
                                </a>
                
                                <!-- Instagram Icon with anchor tag -->
                                <a href="https://www.instagram.com/_surajkumar.1?igsh=eWVidm93eGN0aHln" target="_blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16" style="margin: 8px;">
                                        <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.829 0 8s.01 2.446.048 3.299c.038.85.174 1.532.42 2.243a3.9 3.9 0 0 0 .923 1.417A3.9 3.9 0 0 0 2.76 13.58c.388.198.97.332 1.223.372.853.037 1.128.047 4.24.047 3.114 0 3.388 0 4.24-.047.253-.04.835-.174 1.223-.372a3.9 3.9 0 0 0 1.417-.923A3.9 3.9 0 0 0 13.58 11.24c.198-.388.332-.97.372-1.223.037-.853.047-1.128.047-4.24 0-3.114 0-3.388-.047-4.24-.04-.253-.174-.835-.372-1.223a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 11.24.42C10.832.222 10.25.088 9.398.048 8.544.01 8.271 0 8 0zM8 5.436a2.564 2.564 0 1 1 0 5.127A2.564 2.564 0 0 1 8 5.436zm0 3.79a.656.656 0 1 0 0-1.312.656.656 0 0 0 0 1.312zM12.546 4.422c-.016.052-.052.075-.103.075-.05 0-.088-.03-.104-.073-.036-.102-.138-.117-.156-.121-.016-.006-.086-.029-.085-.077-.02-.043.062-.02.1-.03.037-.01.125-.024.164-.07.037-.065.056-.12-.005-.164-.086-.13-.25-.104-.38-.097-.185.011-.337.121-.451.232-.127.115-.156.203-.098.266.045.04.106.029.178-.001.07-.027.157.033.12.108-.043.077-.13.09-.174.065-.076-.038-.207-.052-.234-.142-.084-.2-.044-.427.127-.52a.582.582 0 0 1 .281-.088.48.48 0 0 1 .472.261c.056.118-.123.118-.214.07-.099-.027-.224.032-.309-.019-.172-.078-.293-.217-.276-.414.024-.07.033-.183-.075-.263-.108-.078-.237-.019-.223.147.015.22.254.428.451.278.178-.13.18-.235.248-.337.097-.128.048-.298-.065-.39-.08-.059-.134-.134-.161-.211-.048-.112-.075-.244-.148-.331-.056-.073-.118-.137-.173-.215-.168-.246-.18-.504-.299-.755-.115-.222-.397-.24-.598-.043.056-.065-.065-.07-.051-.149-.114-.146-.352-.174-.429-.015-.155-.047-.328-.211-.433-.292-.292-.238-.805-.478-.67-.285.134-.364.408-.525.606-.039.044-.1.151-.174.206-.224-.216-.442-.443-.664-.657-.254-.25-.49-.488-.774-.712.004-.004.053-.027.076-.05-.056-.046-.142-.103-.211-.062-.072-.084-.097-.243.019-.287.118-.054.206-.179.31-.294z"/>
                                    </svg>
                                </a>
                            </div>

          <!-- Icons ends-->

            <!--Resume Section-->
             
             <div id="dynamicContent"></div>
          </div>

          <div class="col-md-6 text-center">
            <img src="images/Photo.jpg" style="height: 250px; width: 200px; border-radius: 8px; margin-top: 8px; border: 2px solid #ddd; box-shadow: 8px 8px 4px 2px rgb(92, 91, 91) ;">
            <div class="col">
             <a href="images/suraj.pdf" target="_blank"> <button onclick="changeContent()" > Download Resume</button></a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <hr>
    
    <!--About Section Start.-->
    <section id="about"></section>
 

    <div class="container" id="co">
      <h1 style="text-align: center; color: #2874e6; font-size: 40px; text-transform: uppercase; letter-spacing: 2px; margin-top: 8px; font-weight: bold; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);">
        <u><i> About</i> </u>
      </h1> 
      <div class="row" style=" margin-top: 15px">
        <!--Career Section.-->
        <div class="col-md-4 text-center">
          <img src="images/caob.jpg" class="text-center" style=" width: 300px; height: 250px ;  filter: drop-shadow( 1px 1px 10px rgb(59, 58, 58));">
        </div>
        <div class="col-md-8">
         <section class="about-sectio">
          <div class="section">
            <h3>Career Objective</h3>
            <p>Innovative and results-driven software developer, skilled in [technologies], eager to contribute technical expertise and drive growth by delivering high-quality, 
              efficient solutions for business success.</p>
          </div>
        </div>
      </div>
    </div>
    <!--Career Ends-->
    <br>
    <div class="container" ></div>
    <!--Work Experience Start-->
    <div class="container" id="we" style="margin-top: 20px;">
      <div class="row">
       
        <div class="col-md-8">
         <section class="about-sectio">
          <div class="section">
            <h3>Work Experience   ( Fresher ).</h3>
            <p>As a passionate and quick learner, I am eager to apply my skills and absorb new knowledge. With training,
               I’m committed to delivering impactful, high-quality solutions.</p>
          </div>
        </div>
        <div class="col-md-4 text-center">
          <img src="images/workexperience.avif" class="text-center" style=" width: 300px; height: 250px;  filter: drop-shadow( 1px 1px 10px rgb(59, 58, 58));">
        </div>
      </div>
    </div>

    <!--Work Experience End-->
    
    <!--Educational Qualification Start-->
    <section id="eq"></section>
 
    
      <div class="container">
        <h1 style="text-align: center; color: #5295f8; font-size: 30px; text-transform: uppercase; letter-spacing: 2px; margin-top:25px; font-weight: bold; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);">
          <u><i> Educational Qualifications.</i> </u>
    </h1>
        <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px; max-width: 1200px; margin: 0 auto;">
        
          <div style="background-color: #fff; border: 1px solid #ddd; padding: 20px; text-align: center; border-radius: 8px; box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);">
              <img src="images/10png.png" alt="Qualification 1" style="width: 300px; max-width: 200px; height: 200px; border-radius: 50%; margin-bottom: 15px;">
              <p style="font-size: 16px; font-weight: bold; margin-bottom: 15px;">Matriculation "C.B.S.E"</p>
              <a href="images/10th.pdf" download style="display: inline-block; background-color: #4CAF50; color: #fff; padding: 10px 20px; text-decoration: none; border-radius: 5px; font-size: 14px; transition: background-color 0.3s;">Download Certificate</a>
          </div>
  
          <div style="background-color: #fff; border: 1px solid #ddd; padding: 20px; text-align: center; border-radius: 8px; box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);">
              <img src="images/12.JPG" alt="Qualification 2" style="width: 300px; max-width: 200px; height: 200px; border-radius: 50%; margin-bottom: 15px;">
              <p style="font-size: 16px; font-weight: bold; margin-bottom: 15px;">Intermediate "B.S.E.B."</p>
              <a href="images/12th.pdf" download style="display: inline-block; background-color: #4CAF50; color: #fff; padding: 10px 20px; text-decoration: none; border-radius: 5px; font-size: 14px; transition: background-color 0.3s;">Download Certificate</a>
          </div>
  
          <div style="background-color: #fff; border: 1px solid #ddd; padding: 20px; text-align: center; border-radius: 8px; box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);">
              <img src="images/bcse.jpg" alt="Qualification 3" style="width: 300px; max-width: 200px; height: 200px; border-radius: 50%; margin-bottom: 15px;">
              <p style="font-size: 16px; font-weight: bold; margin-bottom: 15px;">B.Tech. CSE "B.E.U."</p>
              <a href="images/btechfinal.pdf" download style="display: inline-block; background-color: #4CAF50; color: #fff; padding: 10px 20px; text-decoration: none; border-radius: 5px; font-size: 14px; transition: background-color 0.3s;">Download Certificate</a>
          </div>
          
      </div>
  
      <script>
          // Simple media queries using JavaScript
          window.addEventListener('resize', function () {
              const gridContainer = document.querySelector('div[style*="display: grid"]');
              if (window.innerWidth <= 768) {
                  gridContainer.style.gridTemplateColumns = "repeat(1, 1fr)";
              } else if (window.innerWidth <= 480) {
                  gridContainer.style.gridTemplateColumns = "1fr";
              } else {
                  gridContainer.style.gridTemplateColumns = "repeat(3, 1fr)";
              }
          });
  
          // Trigger resize event to adjust grid on page load
          window.dispatchEvent(new Event('resize'));
      </script>
     
      </div>
    
    <!--Educational Qualification End-->

    <!--Achievements & Certifications Start-->
    <section id="ac"></section>
  
    
      <div class="container">
        <h3 style="text-align: center; color: #5295f8; font-size: 34px; text-transform: uppercase; letter-spacing: 2px; margin-top: 25px; font-weight: bold; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);">
          <u><i> Achievements & Certifications</i> </u>
    </h3>
        <div class="row">
            <div class="col-md-5 text-center" style="border-radius: 8px; box-shadow: #ddd; border: 2px solid #ddd;">
             <img src="images/PPC.jpg" style="height:225px ; border:2px solid #b4e2b5; padding: 1px; box-shadow: 5px 5px 2px 2px rgb(136, 136, 135);">
             <div class="fw-bold" style="margin: 5px; border: 1px #ade762;">
              <h6> Problem Solving Programming through 'C'. </h6>
               <p>NPTEL COURSE CERTIFICATION. </p>
            </div>

            </div>
            <div class="col-md-2 text-center" style="background-color: white;"> <br> </div>
            <div class="col-md-5 text-center" style="border-radius: 8px; box-shadow: #ddd; border: 2px solid #ddd;">
              <img src="images/SS.png" style="height:225px ; border:2px solid #b4e2b5; padding: 1px; box-shadow: 5px 5px 2px 2px rgb(136, 136, 135);">
              <div class="fw-bold" style="margin: 5px; border: 1px #ade762;">
                <h6> SOFT SKILLS. </h6>
                 <p>NPTEL COURSE CERTIFICATION. </p>
              </div>
            </div>
          
        </div>
      </div>
      <hr>
    
      <!--Achievements & Certifications End-->
     
      <!--Project Section Start-->
      <section id="project"></section>
     
       <div class="container">
        <h1 style="text-align: center; color: #5295f8; font-size: 40px; text-transform: uppercase; letter-spacing: 2px; margin-top: 15px; font-weight: bold; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);">
          <u><i> Projects</i> </u>
    </h1>
        <div class="row">
          
        <section id="projects">
        <div class="projects-container" style="margin: 16px;">
            <div class="project" style=" filter: drop-shadow(1px 1px 10px rgb(128, 125, 125));">
                <img src="images/Ssoft.png" alt="Project1" style="border: 1px solid rgb(54, 53, 53); border-radius: 5px;">
                <h3>Swe Softech Pvt. Ltd.</h3>
                <p>A personal software company website website using HTML, CSS, and JavaScript..</p>
                <a href="http://swesoftech.unaux.com/" class="project-link" target="_blank">View Project</a>
            </div>
            <div class="project" style=" filter: drop-shadow(1px 1px 10px rgb(128, 125, 125));">
                <img src="images/Surajk.png" alt="Project2" style="border: 1px solid rgb(54, 53, 53); border-radius: 5px;">
                <h3>Personal Prortfolio.</h3>
                <p>A personal portfolio website using HTML, CSS, and JavaScript.</p>
                <a href="index.php" class="project-link">View Project</a>
            </div>
        </div>
    </section>
          </div>
        </div>
       </div>
       <hr>
      
      <!--Project Section End-->
      
      <!--Internships Section Start-->
      <section id="internship"></section>
      <h1 style="text-align: center; color: #5295f8; font-size: 40px; text-transform: uppercase; letter-spacing: 2px; margin-top: 15px; font-weight: bold; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);">
        <u><i> Internships</i> </u>
  </h1>
     
      
        
        <div class="internship-container">
            <div class="internship-card">
                <h3>Inplant <br>"TRTC Patna".</h3>
                <p style="margin-top: 15px;">During my inplant training at TRTC Patna, I gained practical knowledge of CNC machine operations, programming, and maintenance techniques.  .</p>
                <button class="btn-apply"><a href="images/trtc.pdf" style="text-decoration: none; color: white;">View Certificate</a> </button>
            </div>

            <div class="internship-card" style="margin-left: 28px;">
                <h3>Andriod App Development "Internshala".</h3>
                <p>Completed Android App Development internship on Internshala, gaining practical experience in app creation.</p>
                <button class="btn-apply"><a href="images/internshala.pdf" style="text-decoration: none; color: white;">View Certificate</a></button>
            </div>  
        </div>
    
    <hr>

      <!--Internships Section End-->
        
      <!--Skill Section Start-->
      <section id="skills"></section>
      <h1 style="text-align: center; color: #5295f8; font-size: 40px; text-transform: uppercase; letter-spacing: 2px; margin-top: 15px; font-weight: bold; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);">
        <u><i> Skills</i> </u>
  </h1>
      <div class="container">
      
  
        <div class="row">
          <div class="col-md-6">

            <div style="display: flex; justify-content: space-between; align-items: center; font-weight: 600; padding: 0.5rem 1rem; margin-bottom: 2rem; border-radius: 0.5rem; box-shadow: 0px 4px 25px rgba(14, 36, 49, 0.15);">
              <div style="display: flex; align-items: center;">
                <i style="font-size: 4rem; margin-right: 1rem;"></i>
                <span class="fw-bold">HTML5</span>
              </div>
              <!-- Progress bar container -->
              <div style="width: 80%; max-width: 600px; background-color: #e0e0e0; border-radius: 25px; overflow: hidden; position: relative;">
                <div style="width: 50%; height: 20px; background-color: #4caf50; border-radius: 25px; position: relative;">
                  <span style="position: absolute; top: 50%; right: 10px; transform: translateY(-50%); font-size: 16px; color: white; font-weight: bold;">50%</span>
                </div>
              </div>
            </div>

            <div style="display: flex; justify-content: space-between; align-items: center; font-weight: 600; padding: 0.5rem 1rem; margin-bottom: 2rem; border-radius: 0.5rem; box-shadow: 0px 4px 25px rgba(14, 36, 49, 0.15);">
              <div style="display: flex; align-items: center;">
                <i style="font-size: 4rem; margin-right: 1rem;"></i>
                <span class="fw-bold">CSS 3</span>
              </div>
              <!-- Progress bar container -->
              <div style="width: 80%; max-width: 600px; background-color: #e0e0e0; border-radius: 25px; overflow: hidden; position: relative;">
                <div style="width: 40%; height: 20px; background-color: #4caf50; border-radius: 25px; position: relative;">
                  <span style="position: absolute; top: 50%; right: 10px; transform: translateY(-50%); font-size: 16px; color: white; font-weight: bold;">40%</span>
                </div>
              </div>
            </div>

            <div style="display: flex; justify-content: space-between; align-items: center; font-weight: 600; padding: 0.5rem 1rem; margin-bottom: 2rem; border-radius: 0.5rem; box-shadow: 0px 4px 25px rgba(14, 36, 49, 0.15);">
              <div style="display: flex; align-items: center;">
                <i style="font-size: 4rem; margin-right: 1rem;"></i>
                <span class="fw-bold">JAVASCRIPT</span>
              </div>
              <!-- Progress bar container -->
              <div style="width: 80%; max-width: 600px; background-color: #e0e0e0; border-radius: 25px; overflow: hidden; position: relative;">
                <div style="width: 35%; height: 20px; background-color: #4caf50; border-radius: 25px; position: relative;">
                  <span style="position: absolute; top: 50%; right: 10px; transform: translateY(-50%); font-size: 16px; color: white; font-weight: bold;">35%</span>
                </div>
              </div>
            </div>

            <div style="display: flex; justify-content: space-between; align-items: center; font-weight: 600; padding: 0.5rem 1rem; margin-bottom: 2rem; border-radius: 0.5rem; box-shadow: 0px 4px 25px rgba(14, 36, 49, 0.15);">
              <div style="display: flex; align-items: center;">
                <i style="font-size: 4rem; margin-right: 1rem;"></i>
                <span class="fw-bold">BOOTSTRAP</span>
              </div>
              <!-- Progress bar container -->
              <div style="width: 80%; max-width: 600px; background-color: #e0e0e0; border-radius: 25px; overflow: hidden; position: relative;">
                <div style="width: 60%; height: 20px; background-color: #4caf50; border-radius: 25px; position: relative;">
                  <span style="position: absolute; top: 50%; right: 10px; transform: translateY(-50%); font-size: 16px; color: white; font-weight: bold;">60%</span>
                </div>
              </div>
            </div>

          </div>
          <div class="col-md-6">

            <div style="display: flex; justify-content: space-between; align-items: center; font-weight: 600; padding: 0.5rem 1rem; margin-bottom: 2rem; border-radius: 0.5rem; box-shadow: 0px 4px 25px rgba(14, 36, 49, 0.15);">
              <div style="display: flex; align-items: center;">
                <i style="font-size: 4rem; margin-right: 1rem;"></i>
                <span class="fw-bold">C </span>
              </div>
              <!-- Progress bar container -->
              <div style="width: 80%; max-width: 600px; background-color: #e0e0e0; border-radius: 25px; overflow: hidden; position: relative;">
                <div style="width: 40%; height: 20px; background-color: #4caf50; border-radius: 25px; position: relative;">
                  <span style="position: absolute; top: 50%; right: 10px; transform: translateY(-50%); font-size: 16px; color: white; font-weight: bold;">40%</span>
                </div>
              </div>
            </div>
            <div style="display: flex; justify-content: space-between; align-items: center; font-weight: 600; padding: 0.5rem 1rem; margin-bottom: 2rem; border-radius: 0.5rem; box-shadow: 0px 4px 25px rgba(14, 36, 49, 0.15);">
              <div style="display: flex; align-items: center;">
                <i style="font-size: 4rem; margin-right: 1rem;"></i>
                <span class="fw-bold">C++</span>
              </div>
              <!-- Progress bar container -->
              <div style="width: 80%; max-width: 600px; background-color: #e0e0e0; border-radius: 25px; overflow: hidden; position: relative;">
                <div style="width: 40%; height: 20px; background-color: #4caf50; border-radius: 25px; position: relative;">
                  <span style="position: absolute; top: 50%; right: 10px; transform: translateY(-50%); font-size: 16px; color: white; font-weight: bold;">40%</span>
                </div>
              </div>
            </div>
            
            <div style="display: flex; justify-content: space-between; align-items: center; font-weight: 600; padding: 0.5rem 1rem; margin-bottom: 2rem; border-radius: 0.5rem; box-shadow: 0px 4px 25px rgba(14, 36, 49, 0.15);">
              <div style="display: flex; align-items: center;">
                <i style="font-size: 4rem; margin-right: 1rem;"></i>
                <span class="fw-bold">JAVA</span>
              </div>
              <!-- Progress bar container -->
              <div style="width: 80%; max-width: 600px; background-color: #e0e0e0; border-radius: 25px; overflow: hidden; position: relative;">
                <div style="width: 35%; height: 20px; background-color: #4caf50; border-radius: 25px; position: relative;">
                  <span style="position: absolute; top: 50%; right: 10px; transform: translateY(-50%); font-size: 16px; color: white; font-weight: bold;">35%</span>
                </div>
              </div>
            </div>
            
            <div style="display: flex; justify-content: space-between; align-items: center; font-weight: 600; padding: 0.5rem 1rem; margin-bottom: 2rem; border-radius: 0.5rem; box-shadow: 0px 4px 25px rgba(14, 36, 49, 0.15);">
              <div style="display: flex; align-items: center;">
                <i style="font-size: 4rem; margin-right: 1rem;"></i>
                <span class="fw-bold">PYTHON</span>
              </div>
              <!-- Progress bar container -->
              <div style="width: 80%; max-width: 600px; background-color: #e0e0e0; border-radius: 25px; overflow: hidden; position: relative;">
                <div style="width: 34%; height: 20px; background-color: #4caf50; border-radius: 25px; position: relative;">
                  <span style="position: absolute; top: 50%; right: 10px; transform: translateY(-50%); font-size: 16px; color: white; font-weight: bold;" class="text-center">Loading...</span>
                </div>
              </div>
            </div>
            </div>
        </div>
      </div>
             
      <hr>
      <!--Skill Section End-->
      <!-- Work Section Start-->
      <section id="work"></section>

        <h1 style="text-align: center; color: #5295f8; font-size: 40px; text-transform: uppercase; letter-spacing: 2px; margin-top: 15px; font-weight: bold; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);">
          <u><i> Work</i> </u>
    </h1>   
       <div class="container">
        <section class="work-section" id="work">
            <h2>Work Section</h2>
            
            <div class="full-time" id="full-time">
                <h3>Full-time ( Fresher ).</h3>
                <p>I am a fresher looking for full-time job opportunities in the tech industry.
                   As a passionate and quick learner, I am eager to apply my skills and absorb new knowledge. 
                  With training, I’m committed to delivering impactful, high-quality solutions</p>
            </div>

            <div class="part-time" id="part-time">
                <h3>Part-time ( Youtuber ).</h3>
                <p>Part-time YouTuber providing assessment solutions for Infosys Springboard, 
                  helping learners understand key concepts and improve their performance with clear,
                   concise, and effective explanations.</p>
                   <p> Link of my youtube channel is <a href="//www.youtube.com/@surajkumarsharma2358?si=k6i0Y7MLO-qQ7EHA"> <b>#@_Insoscions'</b> </a></p>
            </div>
        </section>

        <section class="hobby-section" id="hobby">
            <h2>My Hobbies</h2>
            <p>I enjoy coding, drafting personal projects, and creating videos for my youtube channel in my free time.</p>
            <p>My short time goal is to create an <b> AI based Chatbot. </b></p>
        </section>
    </div>


       <!--Work section End-->
       <!--Contact Section Start-->
       <h2 style="text-align: center; color: #5295f8; font-size: 40px; text-transform: uppercase; letter-spacing: 2px; margin-top: 15px; font-weight: bold; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);">
        <u><i> Contact Me.</i> </u>
  </h2>
       <div class="container" id="cm">
       <div class="form-container">
        <h5 class="text-center" style="margin: 5px;">Please share your feedback.</h5>
       
        <form id="contactForm" onsubmit="return validateForm()" action="" method="post">
            <div class="form-group" >
                <label for="name">Name</label>
                <input type="text" id="name" name="name" required>
                <span class="error" id="nameError"></span>
            </div>
            <div class="form-group">
                <label for="mobile">Mobile Number</label>
                <input type="text" id="mobile" name="mobile" required>
                <span class="error" id="mobileError"></span>
            </div>
            <div class="form-group">
                <label for="email">Email ID</label>
                <input type="email" id="email" name="email" required>
                <span class="error" id="emailError"></span>
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea id="message" name="message" required></textarea>
                <span class="error" id="messageError"></span>
            </div>
            <div class="form-group">
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>
  </div>

    <script>
        function validateForm() {
            // Clear previous error messages
            document.getElementById("nameError").innerText = "";
            document.getElementById("mobileError").innerText = "";
            document.getElementById("emailError").innerText = "";
            document.getElementById("messageError").innerText = "";

            // Get form data
            var name = document.getElementById("name").value;
            var mobile = document.getElementById("mobile").value;
            var email = document.getElementById("email").value;
            var message = document.getElementById("message").value;

            var isValid = true;

            // Validate name
            if (name === "") {
                document.getElementById("nameError").innerText = "Name is required.";
                isValid = false;
            }

            // Validate mobile number (must be 10 digits)
            var mobilePattern = /^[0-9]{10}$/;
            if (!mobile.match(mobilePattern)) {
                document.getElementById("mobileError").innerText = "Please enter a valid 10-digit mobile number.";
                isValid = false;
            }

            // Validate email
            var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
            if (!email.match(emailPattern)) {
                document.getElementById("emailError").innerText = "Please enter a valid email address.";
                isValid = false;
            }

            // Validate message
            if (message === "") {
                document.getElementById("messageError").innerText = "Message is required.";
                isValid = false;
            }

            return isValid; // If the form is valid, it will submit, otherwise, it will prevent submission
        }
    </script>

       <!--Contact Session Ends-->
    
    <!--Footer Start -->
    <footer>
      <div class="mt-5 pt-5 pb-5 footer">
        <div class="container">
          <div class="row">
            <div class="col-lg-5 col-xs-12 about-company">
              <h2>Please, Hire Me.</h2>
              <p class="pr-5 text-white-50">"I am dedicated, hardworking, and <br> eager to learn, ensuring my efforts will<br> contribute to the company's growth and<br> success." </p>
              <p><a href="#"><i class="fa fa-facebook-square mr-1"></i></a><a href="#"><i class="fa fa-linkedin-square"></i></a></p>
            </div>
            <div class="col-lg-3 col-xs-12 links">
              <h4 class="mt-lg-0 mt-sm-3">Links</h4>
                <ul class="m-0 p-0">
                  <li>- <a href="https://www.linkedin.com/in/suraj-kumar-sharma-0a67382a7" target="_blank">Linkedin</a></li>
                  <li>- <a href="https://github.com/Suraj83405" target="_blank">Github</a></li>
                  <li>- <a href="https://youtube.com/@surajkumarsharma2358?si=5tO-VWdXS7RvR6qu" target="_blank">YouTube</a></li>
                  <li>- <a href="mailto:surajkumarsharna.83405@gmail.com" target="_blank">Email ID</a></li>
                  <li>- <a href="https://www.instagram.com/_surajkumar.1?igsh=eWVidm93eGN0aHln" target="_blank">Instragram</a></li>
                  
                </ul>
            </div>
            <div class="col-lg-4 col-xs-12 location">
              <h4 class="mt-lg-0 mt-sm-4">Location</h4>
              <p>New Dillian, Dehri On Sone,<br> Rohtas, Bihar, ( 821307 ).</p>
          
              <p class="mb-0"> <a href="tel:8340596877" style="text-decoration: none; color: white;" target="_blank" >+91 8340596877</a></p>
              <h3></h3>
              <p class="mb-0"> <a href="mailto:Surajkumarsharma.83405@gmail.com" target="_blank" style="text-decoration: none; color: white;">Surajkumarsharma.83405@gmail.com</a></p>
            </div>
          </div>
          <div class="row mt-5">
            <div class="col copyright">
              <p class=""><small class="text-white-50">© 2025. All Rights Reserved.</small></p>
            </div>
          </div>
        </div>
        </div>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>