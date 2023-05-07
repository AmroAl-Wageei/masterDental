<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content=" This is website for dental clinic in aqaba country ">
    <meta name="author" content=" Amro Salah  Al - Wageei">
    <meta name=" Keyword " content=" dentist , clinic , Aqaba , jordan , braces , dentist near me ">
    <meta name="Copyright" content=" Orange Coding Academy . Designed by Amro Al - Wageei ">
    <meta name="refresh" content=" 1 ">
    <title> About Us </title>

     <!-- Title Icon   -->
     <link rel="icon" href="images/aamro.png" type="image/icon type" />  
    <!-- Link CSS -->
    <link rel="stylesheet" href="{{ asset('CSS/aboutus.css')}}">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/3692f58ddc.js" crossorigin="anonymous"></script>
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Dosis:wght@200;300;400;500;600;700;800&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');


        body {
            font-family: 'Dosis', sans-serif !important;

        }
    </style>

</head>
<body>



<!--  Nav Bar  -->

@include('front.duplicate.navbar')

<!--  Nav Bar  -->






<!-- About Us Header  -->

<section class="header">
    <div class="text_header_book">
        <h1> <span> About </span> US  </h1>
        <p> We are committed to providing quality dental care to our patients with love. We provide all comprehensive solutions for our patients’ oral health needs <br><br> under one roof. Believing in the importance of listening, we take the time to understand their objectives and provide solutions to transform <br><br> their smile into  something healthy, bright and beautiful.<br><br>
           <span> Get in Touch with Us </span>  </p>
        <a href="#Team" class="actionnn_btn" >  Meet Out Team Behind </a>
    </div>
</section>

<!-- End About Us Header  -->






<!--  About Dr -->

<section class="about_dr">
    <div class="main_dr">
        <img src="../images/header/About/AboutDr.jpg" alt="">
        <div class="all-text">
            <h4> Dr . Abdalmajed Shandaq</h4>
            <h1>A certified dental surgeon locally and internationally.</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati fugit quis consequuntur alias? Debitis tempore minima suscipit corrupti corporis, doloremque optio placeat nihil ab ad dolore deserunt voluptatem est soluta.</p>
            <div class="btn_dr">
                <a href="#Team"><button type="button"> Our Team </button></a>
                <button type="button" class="btn2"> Learn More </button>
            </div>
        </div>
    </div>
</section>

<!--  About Dr -->




<!--  Our Vission and Mission -->

@include('front.duplicate.vission')

<!--  Our Vission and Mission -->



<!--  Our Story -->

<div class="story">

    <div> 
        <img src="./images/about/Team.png" alt="teamAbout">
    </div>

    <div class="ss">
        <h2 id="about1"> Our Story </h2>
        <h1 id="about2"> Committed To Dental <br>Excellence</h1>
        <h3 id="about3"> We Create Beautiful and Brighter Smiles </h3>

        <div class="about4">
            <ul>
                <li> We are a team of 3 professional dentists with extensive experience<br> with the latest trends and technologies in the dental industry.</li>
                <li>We are known for the most affordable and painless dental treatments <br>that our clients have been loving for years. Whether it is cosmetic<br> dental treatments, root canals, tooth extraction.</li>
            </ul>
        </div>

        <p id="drname"> Dr . Abd Shandaq </p>
        <h4 id="drpos"> Master of Dentistry </h4>
    </div>
</div>

<!-- End Our Story -->






<!--  Our Team -->

{{-- <div class="our_team" id="Team">
    <h1 class="heading">
        <span>Meet Our</span> Team Behind
    </h1>
    <div class="profiless">

        <div class="profile">
            <img src="../images/about/Amro.png" alt="" class="profile_img">
            <h3 class="usename"> Dr . Abdalmajed Shandaq </h3>
            <h5> Dentist </h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas unde.</p>
        </div>

        <div class="profile">
            <img src="../images/about/OurTeam1.jpg" alt="" class="profile_img">
            <h3 class="usename"> Leen Salem </h3>
            <h5> Secertary </h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas unde.</p>
        </div>

        <div class="profile">
            <img src="../images/about/OurTeam1.jpg" alt="" class="profile_img">
            <h3 class="usename"> Haya Nobani </h3>
            <h5> Marketing </h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas unde.</p>
        </div>

        <div class="profile">
            <img src="../images/about/Amro.png" alt="" class="profile_img">
            <h3 class="usename"> Amro Al-Wageei </h3>
            <h5> Web Develper </h5>
            <p>A motivated  developer pursuing a software development and QA testing career .</p>
        </div>
    </div>
</div> --}}

<!--  End Our Team -->


{{-- Our Team --}}

<div class="container-team">
    

    <h3>Our Team </h3>

    <div class="cen"></div>
    <div class="container">


        <div class="box">
          <div class="face front">
            <img src="../Images/about/Amro.png" alt="" />

          </div>
  
          <div class="face back">
            <h2>Amro Al-Wageei <br> <span>Web Developer</span></h2>
  
            <p>
                Expert web developer with proficiency in front-end and back-end technologies, dedicated to delivering high-quality results.
            </p>
            <div class="social">
                <a href="https://www.facebook.com/profile.php?id=100012890643589"><i class="fab fa-facebook-f icon"></i></a>
                <a href="https://www.instagram.com/shandaqamro7/"><i class="fab fa-instagram icon"></i></a>
                <a href="https://www.twitter.com/"><i class="fab fa-twitter icon"></i></a>
               
              </div>
          </div>
        
        </div>
        <div class="box">
          <div class="face front">
            <img src="../Images/about/Amro.png" alt="" />

          </div>
  
          <div class="face back">
            <h2>Amro Al-Wageei <br> <span>Web Developer</span></h2>
  
            <p>
                Expert web developer with proficiency in front-end and back-end technologies, dedicated to delivering high-quality results.
            </p>
            <div class="social">
                <a href="https://www.facebook.com/profile.php?id=100012890643589"><i class="fab fa-facebook-f icon"></i></a>
                <a href="https://www.instagram.com/shandaqamro7/"><i class="fab fa-instagram icon"></i></a>
                <a href="https://www.twitter.com/"><i class="fab fa-twitter icon"></i></a>
               
              </div>
          </div>
        
        </div>
        <div class="box">
          <div class="face front">
            <img src="../Images/header/About/shahed.jpeg" alt="" />

          </div>
  
          <div class="face back">
            <h2>Shahed Ala'a <br> <span> Ui / UX </span></h2>
  
            <p>
                Expert web developer with proficiency in front-end and back-end technologies, dedicated to delivering high-quality results.
            </p>
            <div class="social">
                <a href="https://www.facebook.com/profile.php?id=100012890643589"><i class="fab fa-facebook-f icon"></i></a>
                <a href="https://www.instagram.com/shandaqamro7/"><i class="fab fa-instagram icon"></i></a>
                <a href="https://www.twitter.com/"><i class="fab fa-twitter icon"></i></a>
               
              </div>
          </div>
        
        </div>
        <div class="box">
          <div class="face front">
            <img src="../Images/about/Amro.png" alt="" />

          </div>
  
          <div class="face back">
            <h2>Amro Al-Wageei <br> <span>Web Developer</span></h2>
  
            <p>
                Expert web developer with proficiency in front-end and back-end technologies, dedicated to delivering high-quality results.
            </p>
            <div class="social">
                <a href="https://www.facebook.com/profile.php?id=100012890643589"><i class="fab fa-facebook-f icon"></i></a>
                <a href="https://www.instagram.com/shandaqamro7/"><i class="fab fa-instagram icon"></i></a>
                <a href="https://www.twitter.com/"><i class="fab fa-twitter icon"></i></a>
               
              </div>
          </div>
        
        </div>






      </div>
</div>



      <!-- Tranform Visibility -->
{{-- Our Team --}}





<!-- Slides Section -->

<div class="container_slide_about">

    <div class="sliderr"> </div>

    <div class="sliderr1">
        <h2> Gallery </h2>
        <p>
            Discover a New Level of Dental Care with Dr. Abdalmajed <br> Affordable and Effective Solutions for All Your Dental Needs.
        </p>
                <div class="dott">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>

</div>

<!-- End Slides Section -->




<!-- Footer -->

@include('front.duplicate.footer')

<!-- Footer -->



    <!-- Scroll to top -->
    <span class="up"> <i class="fa-solid fa-arrow-up"></i></span>
    <!-- Icon whatsapp -->
    <script src="https://apps.elfsight.com/p/platform.js" defer></script>
    <div class="elfsight-app-31bee8e4-a299-4036-bbda-e1b2d0331bd3"></div>

    {{-- Link JS --}}
    <script src="{{asset('JS/scrollUp.js')}}"> </script>
    <script src="{{asset('JS/happyclient.js')}}"> </script>
    {{-- Link JS --}}
</body>
</html>