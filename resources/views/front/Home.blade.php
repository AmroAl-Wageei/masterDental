<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Looking for a trusted dental clinic in Aqaba? Visit Dr. Abdalmajed's clinic for top-quality dental services. Our experienced team uses the latest techniques to ensure your dental health. Book your appointment today.">
    <meta name="author" content=" Amro Salah Al - Wageei">
    <meta name="keywords" content="dentist, clinic, Aqaba, Jordan, braces, dental care">    
    <meta name="copyright" content="Orange Coding Academy. All rights reserved.">
    <meta http-equiv="refresh" content="60">
    {{-- <meta http-equiv="refresh" content="1;url=https://amroal-wageei.github.io/masterDental/"> --}}
            <title> Home Page </title>

     <!-- Title Icon   -->
     <link rel="icon" href="images/aamro.png" type="image/icon type" />
     <!-- Title Icon   -->

     <!-- Link CSS -->
     <link rel="stylesheet" href="{{ asset('CSS/style.css')}}">
     <!-- Link CSS -->

    <!-- Boxicons CSS -->
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet" />
    <!-- Boxicons CSS -->

     <!-- Swiper CSS -->
     {{-- <link rel="stylesheet" href="{{ asset('CSS/swiper-bundle.min.css')}}"> --}}
     
     <!-- Before And After Smile - SASS -->
     {{-- <link rel="stylesheet" href="{{ asset('CSS/smile.css')}}"> --}}
     <!-- Before And After Smile - SASS -->
     

     <!-- Font Awesome -->
     <script
     src="https://kit.fontawesome.com/3692f58ddc.js"
     crossorigin="anonymous"
     ></script>
     <!-- Font Awesome -->

     <!-- Google Font -->
     <link rel="preconnect" href="https://fonts.googleapis.com" />
     <!-- Google Font -->

     <!-- Font Awesome 5 fixed  -->
     <script
     src="https://kit.fontawesome.com/a076d05399.js"
     crossorigin="anonymous"
     ></script>
     <!-- Font Awesome 5 fixed  -->

     <!-- JQUERY  -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
     <!-- JQUERY  -->


    <style>


      /* Dr . Abdalmajed for 
            dental clinic */

      @import url("https://fonts.googleapis.com/css2?family=Dosis:wght@200;300;400;500;600;700;800&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap");

      body {
        font-family: "Dosis", sans-serif;
      }



    </style>





</head>
<body>

       {{-- Pre Loader --}}

    <div id="loader-wrapper">
        <div id="loader"></div>
  
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
      </div>

      {{-- Pre Loader --}}


<!--  Fixed  -->

<div class="fixed_nav" >
    <ul>
        <li><a href="{{route('book')}}">

            <span> Book Now</span> <i class="fa-solid fa-book-medical"></i>

                </a></li>
        <li><a href="{{route('contact')}}">
               <span> Call Now</span>  <i class="fa-solid fa-phone-volume" style="margin-right: 20px"></i>
        </a></li>
        {{-- <li><a href="{{route('book')}}">
                <i class="fa-duotone fa-phone-volume"></i> <span> Book Now </span>
        </a></li>
        <li><a href="{{route('contact')}}">
                <i class="fa-duotone fa-phone-volume"></i> <span> Call Now </span>
        </a></li> --}}
    </ul>
</div>

<!--  End Fixed  -->


<!--  Nav Bar  -->

@include('front.duplicate.navbar')

<!--  Nav Bar  -->



<!--  Header Slider   -->

    <div class="slider">


        <div class="myslider fade" style="display: block;">
            <div class="txt one">
                <h1>Dr . Abdalmajed Shandaq </h1><br>
                <h2> Where Science Meets Arts.</h2><br>
                <a href="{{route('book')}}"><button> Book Now </button></a>
            </div>    
          <img src="../images/header/slide1.jpg" alt="img1" style="width: 100%; height: 100%;">
        </div>
    
        <div class="myslider fade">
            <div class="txt two">
                <h1>WE CARE ABOUT YOUR SMILE</h1>
                <P> We offer you a distinguished treatment with the latest <br> medical tools and supplies,
                    as our clinic meets the best <br>standards of quality and public safety.</P><br>
                    <a href="{{route('book')}}"><button> Book Now </button></a>
            </div>    
          <img src="../images/header/slide2.jpg" alt="img1" style="width: 100%; height: 100%;">
        </div>
    
        <div class="myslider fade">
            <div class="txt three">
                <h1>You deserve the best  </h1><br>
                <h2>  We make smile a healthier , brighter <br>and more beautifull smile.</h2><br>
                <a href="{{route('book')}}"><button> Book Now </button></a>
            </div>    
          <img src="../images/header/slide3.jpg" alt="img1" style="width: 100%; height: 100%;">
        </div>
    
       
        <a class="prev" onclick="plusSlides(-1)">&#10094</a>
        <a class="next" onclick="plusSlides(1)">&#10095</a>
    
        <div class="dotsbox" style="text-align: center;">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>
    
    </div>

<!--  Header Slider   -->

{{-- fff --}}


    <!-- ONE -->

    <div class="box_brieff">
        <div class="single_brief">
          <div class="icon_breif">
            <i class="fa-solid fa-phone-volume"></i>
          </div>
          <h2>Telephone</h2>
          <p>+962 799379762</p>
        </div>
  
        <div class="single_brief">
          <div class="icon_breif">
            <i class="fa-solid fa-location-dot"></i>
          </div>
          <h2>Clinic location</h2>
          <p>Aqaba - Jordan</p>
        </div>
  
        <div class="single_brief">
          <div class="icon_breif">
            <i class="fa-solid fa-calendar-check"></i>
          </div>
          <h2>Appoinement</h2>
          <p>Book appointments and consultations</p>
        </div>
        
      </div>
  
      <!-- ONE  -->







<!-- About Dr -->

<section class="about_dr">
    <div class="main_dr">
       
        <img src=" {{asset('images/header/About/AboutDr.jpg')}}" alt="">
        <div class="all-text">
            <h4> Dr . Abdalmajed Shandaq</h4>
            <h2>Is a highly skilled and certified dental surgeon, both locally and internationally</h2>
            <p> <strong>With nearly <span>25 years of experience</span> </strong>, including serving as the former director of Princess Haya Hospital and as a retired dean of the Jordanian Armed Forces, he brings a wealth of knowledge and expertise to his practice. Dr. Shandaq and his team use state-of-the-art technology and the latest techniques to ensure that patients receive the best possible treatment. Whether you're in need of a routine check-up or a more complex procedure, you can trust Dr. Shandaq and his team to provide you with the highest level of care.<strong> Contact us today to schedule your appointment and start your journey towards a healthier, happier smile.</strong> </p>
            <div class="btn_dr">
                <a href=".{{route('about')}}"></a><button type="button"> Our Team </button>
                <a href="{{route('book')}}"><button type="button" class="btn2"> Book Now </button></a>
            </div>
        </div>
    </div>
</section>

<!-- About Dr -->




<!--  Our Vission and Mission -->


@include('front.duplicate.vission')

<!--  Our Vission and Mission -->



<!-- Clinic  -->

<div class="Clinic">

    <h1> What distinguishes Dr. Abd-Almajed Shandaq Clinic? </h1>

    <div class="row">

        <div class="service">
            <i class="fa-solid fa-tooth"></i>
            <h2>Outstanding treatment </h2>
            <p> Experience exceptional medical care from Dr. Abd-Almajed Shandaq, with personalized treatment tailored to your unique needs.</p>
        </div>

        <div class="service">
            <!-- <i class="fa-regular fa-face-laugh-beam"></i> -->
            <!-- <i class="fa-solid fa-heart"></i> -->
            <i class="fa-solid fa-handshake-angle"></i>
            <h2> Work team </h2>
            <p> Meet our experienced and compassionate team of medical professionals, committed to providing the best possible care for you.</p>
        </div>

        <div class="service">
            <i class="fa-regular fa-thumbs-up"></i>
            <h2>Guaranteed results </h2>
            <p> We stand behind our treatments and guarantee results to ensure your complete satisfaction.</p>
        </div>

        <div class="service">
            <i class="fa-solid fa-toolbox"></i>
            <h2>Integrated medical equipment</h2>
            <p> Our clinic features the latest in state-of-the-art medical equipment to support accurate diagnoses and effective treatments.</p>
        </div>
    </div>

</div>

<!-- Clinic  -->



<!-- Our Value -->

<div class="cont_value">  

    <h3>Our Values </h3>
    <h1> Our Work Is Heavily Shaped by Our Core Values </h1>
    <div class="value">


        <div class="product">
            <div class="number"> 01 </div>
            <h3> Compassion </h3>
            <p>We believe in treating our patients with kindness and understanding, and we strive to provide a warm and welcoming environment for everyone who walks through our doors.</p>
        </div>
        <div class="product">
            <div class="number"> 02 </div>
            <h3> Progression </h3>
            <p> We are committed to staying up-to-date with the latest advancements in dentistry, and we regularly attend continuing education courses and seminars to ensure that we are providing our patients with the best possible care.</p>
        </div>
        <div class="product">
            <div class="number"> 03 </div>
            <h3> Respect </h3>
            <p>We treat every patient and colleague with the utmost respect and dignity, and we believe that everyone deserves to be heard and understood.</p>
        </div>
        <div class="product">
            <div class="number"> 04 </div>
            <h3> Courage </h3>
            <p> We are dedicated to helping patients feel comfortable and safe during appointments, even in challenging cases. We find the best solution for each patient's unique needs.</p>
        </div>

</div>

<!-- Our Value -->



<!-- Call to action book  -->

<section class="cta">

    <h2> Be kind to your dentist. Because he has “fillings” too.<br> Be the reason someone <span> SMILES</span> today!
    </h2>
    <a href="{{route('book')}}" class="action_btn"> Book Now </a>
</section>

<!-- End Call to action book  -->




<!--  New Patient  -->

<div class="container_book">


    <div class="about_book">
        <div class="inner_about">
            <h2> Trainee Form </h2>
            <p class="text">Train with us under excellent hands and experiences.</p>
            <div class="form">
                <form action="{{Route('user.trainee.store')}}" method="post">
                    @csrf
                    <input type="text" name="name" id="" placeholder="User Name" value="{{ old('name')}}" class="@error('name') is-invalid @enderror">
                    @error('name')
                    <div class="error">{{ $message }}</div>
                    @enderror
                    <input type="email" name="email" id="" placeholder=" Email" value="{{ old('email')}}" class="@error('email') is-invalid @enderror">
                    @error('email')
                    <div class="error">{{ $message }}</div>
                    @enderror
                    <input type="text" name="phone" id="" placeholder="Phone Number" value="{{ old('phone')}}" class="@error('phone') is-invalid @enderror">
                    @error('phone')
                    <div class="error">{{ $message }}</div>
                    @enderror
                    <input type="text" name="intrest" id="" placeholder="Inter your intrest" value="{{ old('intrest')}}" class="@error('intrest') is-invalid @enderror">
                    @error('intrest')
                    <div class="error">{{ $message }}</div>
                    @enderror
                    <div class="btn_book">
                        <button type="submit">Send Request</button>
                    </div>
                </form>
                <div class="old_Patient">
                    Not a Trainee? <a href="{{route('book')}}"> 
                        Book Now
                    </a>
                </div>

            </div>

        </div>
    </div>

</div>

<!--  New Patient  -->



{{-- Happy Client Test --}}

@include('front.duplicate.happyclient')

{{-- Happy Client Test --}}



<!-- HAPPY CLIENT -->

{{-- <div class="happy_client">

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
        <img src="{{asset('images/header/Happy_Client/girl1.png')}}" alt="">
        </div>
        <div class="para">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis vitae soluta rem officia ipsam, illo distinctio debitis c
        </div>
    </div>

    <div class="card">
        <div class="card_img">
        <img src="{{asset('images/header/Happy_Client/men1.png')}}" alt="">
        </div>
        <div class="para">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis vitae soluta rem officia ipsam, illo distinctio debitis c
        </div>
    </div>

    <div class="card">
        <div class="card_img">
        <img src="{{asset('images/header/Happy_Client/men3.jpg')}}" alt="">
        </div>
        <div class="para">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis vitae soluta rem officia ipsam, illo distinctio debitis c
        </div>
    </div>

    <div class="card">
        <div class="card_img">
        <img src="{{asset('images/header/Happy_Client/girl2.png')}}" alt="">
        </div>
        <div class="para">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis vitae soluta rem officia ipsam, illo distinctio debitis c
        </div>
    </div>

    <div class="card">
        <div class="card_img">
        <img src="{{asset('images/header/Happy_Client/men2.jpg')}}" alt="">
        </div>
        <div class="para">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis vitae soluta rem officia ipsam, illo distinctio debitis c
        </div>
    </div>

</div> --}}

<!-- HAPPY CLIENT -->










    <!-- Slides Section -->

    @include('front.duplicate.galleryslider')

    <!-- End Slides Section -->


<!-- Google Map -->

<div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3471.3794566788406!2d35.00686741138437!3d29.534441875080848!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15007110deda62e5%3A0x943e07a599369d37!2z2LnZitin2K_YqSDYp9mE2K_Zg9iq2YjYsdi52KjYr9in2YTZhdis2YrYryDYtNmG2K_ZgiDZhNi32Kgg2KfZhNij2LPZhtin2YY!5e0!3m2!1sen!2sjo!4v1671968113788!5m2!1sen!2sjo" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
   </div>

<!-- Google Map -->


{{-- Footer --}}

<br>
<br>
<br>
@include('front.duplicate.footer')

{{-- Footer --}}



  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <!-- Scroll to top -->
        <span class="up"> <i class="fa-solid fa-arrow-up"></i></span>
    <!-- Scroll to top -->

    <!-- ICON WHATSAPP -->
        <script src="https://apps.elfsight.com/p/platform.js" defer></script>
        <div class="elfsight-app-31bee8e4-a299-4036-bbda-e1b2d0331bd3"></div>
    <!-- ICON WHATSAPP -->
    

    {{-- JS External Link --}}
        <script src="{{asset('JS/smile.js')}}"> </script>
        <script src="{{asset('JS/slider.js')}}"> </script>
        <script src="{{asset('JS/scrollUp.js')}}"> </script>
        <script src="{{asset('JS/happyclient.js')}}"> </script>
    {{-- JS External Link --}}


</body>
</html>