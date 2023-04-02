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
    <title> User Profile </title>


     <!-- Title Icon   -->
     <link rel="icon" href="images/aamro.png" type="image/icon type" />  
    <!-- Link CSS -->
    <link rel="stylesheet" href="{{ asset('CSS/profile.css')}}">
    <link rel="stylesheet" href="{{ asset('CSS/navbar.css')}}">
    <link rel="stylesheet" href="{{ asset('CSS/footer.css')}}">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/3692f58ddc.js" crossorigin="anonymous"></script>
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <!-- Font Awesome 5 fixed  -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

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






<div class="container_profile">


    <div class="box">
        <img src="{{asset("storage/image/".auth()->user()->image)}}" alt="UserImage">
        <ul>
            <li>{{auth()->user()->name}}</li>
            <li>{{auth()->user()->phone}}</li>
            <li>{{auth()->user()->email}}</li>
            <li> 
                <i class="fa-brands fa-square-facebook"></i>
                <i class="fa-brands fa-github"></i>
                <i class="fa-brands fa-linkedin"></i>
            </li>

            <button type="submit">Edit Profile</button>
        </ul>
    </div>


    <div class="about">
        <ul>
            <h1>About Me</h1>
        </ul>
        <ul>
            <h3>Work</h3>
            <li>Web Developer</li>
        </ul>
        <ul>
            <h3>Gender</h3>
            <li>Male</li>
        </ul>
        <ul>
            <h3>Country</h3>
            <li>Aqaba -Jordan</li>
        </ul>
        <ul>
            <h3>More Info</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis similique soluta ducimus a iusto explicabo consectetur totam. Voluptatibus laudantium exercitationem, et voluptatum aut molestias earum porro corrupti dolores pariatur repudiandae atque dolorum tenetur sit odit possimus dolor, temporibus quae, facere velit a labore? Labore ex odit doloremque molestiae voluptatum reiciendis, corporis reprehenderit veniam magni assumenda alias eius sed totam deleniti amet vel.</p>
        </ul>
        <ul>
            <h3>Contact</h3>
            <li> amrosalah97@gmail.com</li>
        </ul>
    </div>
</div>


{{-- Table Reservation --}}

<div class="table">
    <table>
        <thead>
          <tr>
            <th>Services Name</th>
            <th>Services Image</th>
            <th>Price</th>
            <th>Status</th>
            <th>Res Date</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($reservations as $reservation)
            <tr>
                <th>{{$reservation->service->name}}</th>
                <th>
                    <?php $image =$reservation->service->image ?>
                    <img src="{{URL::asset("storage/image/$image")}}" alt="image" />

                </th>
                <th>{{$reservation->service->price}}</th>
                <th>{{$reservation->status}}</th>
                <th>{{$reservation->res_date}}</th>
            </tr>
            @endforeach
        </tbody>
      </table>
      
</div>

{{-- Table Reservation --}}






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