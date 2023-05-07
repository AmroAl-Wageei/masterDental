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
    <title> Contact Us </title>

     <!-- Title Icon   -->
     <link rel="icon" href="images/aamro.png" type="image/icon type" />  
    <!-- Link CSS -->
    <link rel="stylesheet" href="{{ asset('CSS/contactus.css')}}">
    <link rel="stylesheet" href="{{ asset('CSS/navbar.css')}}">
    <link rel="stylesheet" href="{{ asset('CSS/footer.css')}}">
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



<!-- Contact Us Header  -->

<section class="header">
    <div class="text_header_book">
        <h1> <span> CONTACT </span> US  </h1>
        <p> Your perfect smile starts here at Abdalmajed Dental Clinic.<br><br>
            Smile with confidence at Abdalmajed Dental Clinic! <br><br>
           <span> Get in Touch with Us </span>  </p>
        <a href="#Find" class="actionnn_btn"> Find Us </a>
    </div>
</section>

<!-- End Contact Us Header  -->







<!--  Contact US Body  -->


<div class="contact_body">

    <h2> Were here to help </h2>
            <div class="line">
                <div></div>
                <div></div>
                <div></div>
             </div>
        <div class="contact_info">
            <div class="info_box">
                <span><i class="fa-solid fa-phone"></i></span>
                <span> Phone No.</span>
                <span class="text"> +962 799379762</span>
            </div>

            <div class="info_box">
                <span><i class="fa-solid fa-at"></i></span>
                <span>  Email </span>
                <span class="text"> info@dental.com</span>
            </div>

            <div class="info_box">
                <span><i class="fa-solid fa-location-dot"></i></span>
                <span> Address</span>
                <span class="text"> Aqaba - Jordan </span>
            </div>

            <div class="info_box">
                <span><i class="fa-solid fa-calendar"></i></span>
                <span> Opening Hours</span>
                <span class="text"> Sunday - Thursday <br>( 9:00 Am to 3:30 Pm )</span>
            </div>
        </div>


        <div class="contact_form">
            <form action="{{route('user.contact.store')}}" method="post">
                {{-- @method('HEAD') --}}
				@csrf

            <div>
                <input type="text"  class="form_control" name="first_name" id="fname" placeholder="First Name" value="{{ old('first_name')}}" class="@error('first_name') is-invalid @enderror">
                @error('first_name')
                <div class="error">{{ $message }}</div>
            @enderror
                <input type="text"  class="form_control" name="last_name" id="lname" placeholder="Last Name" value="{{ old('last_name')}}" class="@error('last_name') is-invalid @enderror">
                @error('last_name')
                <div class="error">{{ $message }}</div>
            @enderror
            </div>

            <div>
                <input type="email" class="form_control" name="email" id="email" placeholder="Email" value="{{ old('email')}}" class="@error('email') is-invalid @enderror">
                @error('email')
                <div class="error">{{ $message }}</div>
            @enderror
                <input type="text" class="form_control" name="phone" id="phone" placeholder="Phone" value="{{ old('phone')}}" class="@error('phone') is-invalid @enderror">
                @error('phone')
                <div class="error">{{ $message }}</div>
            @enderror
            </div>
            <textarea class="form_control" name="message" id="message" cols="30" rows="5" placeholder="Message" value="{{ old('message')}}" class="@error('message') is-invalid @enderror"></textarea>
            @error('message')
            <div class="error">{{ $message }}</div>
        @enderror
            <input type="submit" class="send_btn" value="send message">
            </form>
            <div>
                <img src="../images/ContactUs/ContactBody.png" alt="contact us">
            </div>

        </div>
    </div>


<!--  End Contact US Body  -->




<!-- Google Map -->

<div class="map" id="Find">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3471.3794566788406!2d35.00686741138437!3d29.534441875080848!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15007110deda62e5%3A0x943e07a599369d37!2z2LnZitin2K_YqSDYp9mE2K_Zg9iq2YjYsdi52KjYr9in2YTZhdis2YrYryDYtNmG2K_ZgiDZhNi32Kgg2KfZhNij2LPZhtin2YY!5e0!3m2!1sen!2sjo!4v1671968113788!5m2!1sen!2sjo" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
   </div>

<!-- Google Map -->






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