


<link rel="stylesheet" href="{{ asset('CSS/navbar.css')}}">








    <!-- Head -->
    <section class="head">
        <div class="containerrrr flexSB">
          <div class="logo">
            <a href="{{ route('home') }}"><img src="./images/LOGOMAIN.png" alt="LOGO" /></a>
          </div>
  
          <div class="social">
            <i class="fab fa-facebook-f icon"></i>
            <i class="fab fa-instagram icon"></i>
            <i class="fab fa-twitter icon"></i>
            <i class="fab fa-youtube icon"></i>
          </div>
        </div>
      </section>
      <!-- Head -->
  
      <!--  Nav Bar  -->
  
      <div class="topnav" id="myTopnav">
        <a href="{{ route('home') }}" class="active">Home</a>
        <a href="{{ route('soon') }}">Coming Soon</a>
        <a href="{{ route('about') }}">About Us</a>
        <a href="{{ route('contact') }}">Contact Us</a>
        <a href="{{ route('profile') }}">Services</a>
        <a href="{{ route('artical') }}">Artical</a>
        <a href="{{ route('book') }}">Book Now</a>
        @if(Auth::user())
        <a href="{{route('user.login.destroy')}}"  id="navr">logout</a>
        <a href=""  id="navr">ACCOUNT</a>
          @else 
          <a href="{{ route('register') }}" id="navr">Sgin Up </a>
          <a href="{{ route('login') }}" id="navr">Sgin In </a>
            @endif
        <a href="#" class="icon" onclick="myFunction()">
          <i class="fa fa-bars"></i>
        </a>
      </div>
  
  
  
      <!--  Nav Bar  -->













<!--  Nav Bar  -->

{{-- <div class="second_nav"> 
    <div class="name"><a href="./index.html"> Dr . Abdalmajed </a>for dental clinic</div> 

    <div class="social">
        <a href="https://www.facebook.com/profile.php?id=100012890643589"><i class="fa-brands fa-facebook"></i></a>
        <a href="https://www.instagram.com/shandaqamro7/"><i class="fa-brands fa-instagram"></i></a>
        <a href="https://mail.google.com/mail/u/0/?pli=1#inbox"><i class="fa-sharp fa-solid fa-reply"></i></a>
    </div>
 </div>

 <div class="nav_main">

    <div class="logo">
        <p>Dr . Abdalmajed </p>
    </div>

    <nav> --}}
        {{-- <ul>
            <li><a href="{{ route('soon') }}">Coming Soon</a></li>
            <li><a href="{{ route('about') }}">About Us</a></li>
            <li><a href="{{ route('contact') }}">Contact Us</a></li>
            <li><a href="{{ route('artical') }}">Artical</a></li>
            <li><a href="{{ route('book') }}">Book</a></li>
            <li><a href="{{ route('profile') }}">Profile</a></li>
        </ul> --}}
        {{-- <u>
            <li><a href="#">Coming Soon</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Contact Us</a></li>
            <li><a href="#">Artical</a></li>
            <li><a href="#">Book</a></li>
            <li><a href="#">Profil</a></li>
    </nav>
    <div class="register">
        <button id="SignUp"><a href="">Logout</a></button>
        <button id="SignUp"><a href="">Sign Up</a></button>
        <button><a href="">Log In</a></button>
    </div>

     --}}
{{-- </div> --}}

<!--  Nav Bar  --> 





<script type="text/javascript" src="{{ asset('js/navbar.js') }}"></script>