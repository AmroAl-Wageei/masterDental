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
    <link rel="stylesheet" href="{{ asset('CSS/navbar.css')}}">
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




<!-- Our Vission -->

<div class="vission">


    <div class="vission_name">
        <h3> The <i>VISION</i>  and <i>MISSION</i>  </h3>
    </div>


    <div class="vission_body">


        <div class="mission1">
        
            <div class="part1">
                <h2> VISION </h2>
                <p> best example of what is possible in dentistry.</p>
            </div>
    
            <div class="part2">
                <h2>MISSION</h2>
                <p>We aim to deliver a patient-focused & quality dental services in a safe & friendly environment by ambitious staff, committed to continuously develop their skills, and to serve our community through educational programs in dentistry.

                    <br> <br>

                    The design of the clinic was well thought of, the colors, the glass surfaces and the lighting all designed with caution to guarantee an extra ordinary experience.

                    <br> <br>

                    We are committed to providing quality dental care to our patients with love. We provide comprehensive solutions for our patients’ oral health needs. Believing in the importance of listening, as we take the time to understand their objectives and provide solutions to transform their smile into something healthy, bright and beautiful.
                </p>
            </div>
        
        </div>
    
        <div class="mission2"> 
    
            <div class="img one"> 
                <img src="../images/header/About/vission.jpg" alt="">
            </div>
            <div></div>
    
            <div></div>

            <div class="img two">
                <img src="../images/header/About/vission1.png" alt="">
            </div>

        </div>


    </div>





</div>

<!-- End Our Vission -->



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

<div class="our_team" id="Team">
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
</div>

<!--  End Our Team -->




<!-- HAPPY CLIENT -->

<div class="happy_client">

    <div class="main_client">
        <h2><span> Happy </span> Stories </h2>
        <h4> Creating Vibrant Smiles for Healthy <br>Lifestyles! </h4>
        
        <div class="item">
            <i class="fa-solid fa-square"></i>
            <i class="fa-solid fa-square" id="item_color"></i>
            <i class="fa-solid fa-square"></i>
            <i class="fa-solid fa-square"id="item_color"></i>
            <i class="fa-solid fa-square"></i>
            <i class="fa-solid fa-square"id="item_color"></i>
        </div>
    </div>

    <div class="card">
        <div class="card_img">
        <img src="../images/about/Amro.png" alt="">
        </div>
        <div class="para">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis vitae soluta rem officia ipsam, illo distinctio debitis c
        </div>
    </div>

    <div class="card">
        <div class="card_img">
        <img src="../images/about/Amro.png" alt="">
        </div>
        <div class="para">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis vitae soluta rem officia ipsam, illo distinctio debitis c
        </div>
    </div>

    <div class="card">
        <div class="card_img">
        <img src="../images/about/Amro.png" alt="">
        </div>
        <div class="para">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis vitae soluta rem officia ipsam, illo distinctio debitis c
        </div>
    </div>

    <div class="card">
        <div class="card_img">
        <img src="../images/about/Amro.png" alt="">
        </div>
        <div class="para">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis vitae soluta rem officia ipsam, illo distinctio debitis c
        </div>
    </div>

    <div class="card">
        <div class="card_img">
        <img src="../images/about/Amro.png" alt="">
        </div>
        <div class="para">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis vitae soluta rem officia ipsam, illo distinctio debitis c
        </div>
    </div>

</div>

<!-- HAPPY CLIENT -->




<!-- Slides Section -->

<div class="container_slide_about">

    <div class="sliderr"> </div>

    <div class="sliderr1">
        <h2> Gallery </h2>
        <p>Lorem ipsum dolor sit amet consectetur <br> adipisicing elit. Quam, officiis.</p>
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


    <script src="../JS/scrollUp.js"> </script>
    
</body>
</html>