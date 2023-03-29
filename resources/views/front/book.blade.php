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
    <title> Book Page</title>

    
     <!-- Title Icon   -->
     <link rel="icon" href="images/aamro.png" type="image/icon type" />  
    <!-- Link CSS -->
    <link rel="stylesheet" href="{{ asset('CSS/book.css')}}">
    <link rel="stylesheet" href="{{ asset('CSS/navbar.css')}}">
    <link rel="stylesheet" href="{{ asset('CSS/footer.css')}}">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/3692f58ddc.js" crossorigin="anonymous"></script>
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Dosis:wght@200;300;400;500;600;700;800&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');

        body {
            font-family: 'Dosis', sans-serif;
        }
    </style>



</head>
<body>


<!--  Nav Bar  -->

@include('front.duplicate.navbar')

<!--  Nav Bar  -->



<!-- Book Header  -->

<section class="header">
    <div class="text_header_artical">
        <h1> Get your own <span> Appoinment</span>  </h1>
        <p>“ The best doctors in the world are Doctor Diet, Doctor Quiet, and Doctor Abdalmajid. ” <br><br>
           <span> Dr . Abdalmajed Shandaq </span>  </p>
        <a href="#BookNow" class="actionnn_btn"> Book Now </a>
    </div>
</section>

<!-- End Book Header  -->





<!--  Book Now  -->

<div class="main_book">

    <div class="container_book">

        <div class="body_book">
    
    
            <div class="head_book" id="BookNow">
                <h1>Booking Form</h1>
                <p> Let's start to booking now!</p>
            </div>
    
    
            <form class="body_box" action="#" method="post">
    
                <div class="row_book">
    
                    <div class="col-6">
                        <p>Your Name</p>
                        <input type="text" name="fname" id="fname" placeholder="Your Name">
                    </div>
                    <div class="col-6">
                        <p>Email Address </p>
                        <input type="email" name="email" id="email" placeholder="Email Address">
                    </div>
    
                </div>
    
                <div class="row_book">
    
                    <div class="col-6">
                        <p>Select Date</p>
                        <input type="date" name="date" id="date">
                    </div>
                    <div class="col-6">
                        <p>Select Number</p>
                        <select name="s-select">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </div>
    
                </div>
    
                <div class="row_book">
    
             <div class="col-12">
                    <p> Messages</p>
                    <textarea name="Messages" id="Messages" cols="3" rows="10"></textarea>
                </div>
    
                </div>
       
    
                <div class="row_book">
                    <div class="col-3">
                        <button type="submit"> Submit </button>
                    </div>
                </div>
    
            </form>
    
    
    
    
        </div>
        
    </div>



    <div class="title_book">
        <div class="all-text">
            <h4> We make smile a healthier,brighter and more beautiful smile . </h4>
            <h1> you deserve the best </h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati fugit quis consequuntur alias? <br> Debitis tempore minima suscipit corrupti corporis, doloremque optio placeat nihil ab ad dolore d<br>eserunt voluptatem est soluta.</p>
            <div class="btn_dr">
                <button type="button" class="btn2"> Learn More </button>
            </div>
        </div>
    </div>

</div>

<!--  Book Now  -->









<!-- Footer -->

<br>
<br>
<br>
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