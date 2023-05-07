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
     <link rel="icon" href="../images/aamro.png" type="image/icon type" />
     <!-- Title Icon   -->
    <link rel="stylesheet" href="{{ asset('CSS/profile.css')}}">
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



<div class="box-profile">
  {{-- <div class="container">

    <div class="image">
      <img src="{{asset("storage/image/".auth()->user()->image)}}" alt="UserImage">
    </div>

    <div class="info">
      <ul>
        <span>User Name  </span><li>{{auth()->user()->name}}</li>
        <span>Phone Number  </span><li>{{auth()->user()->phone}}</li>
          <span>Email Address  </span><li>{{auth()->user()->email}}</li>


      </ul>
    </div>
    
    <div class="edit-profile">
      <button type="submit">Edit Profile</button>

    </div>
  </div> --}}
  <div class="card">
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="card-inner">
  
      <div class="image">
        <img src="{{asset("storage/image/".auth()->user()->image)}}" alt="UserImage">
      </div>
      <div class="info">
        <ul>
           <li> <span> <i class="fa-solid fa-signature"></i></span>{{auth()->user()->name}}</li>
          <li><span> <i class="fa-solid fa-phone"></i></span>{{auth()->user()->phone}}</li>
          <li><span> <i class="fa-solid fa-envelope"></i></span>{{auth()->user()->email}}</li>
      </ul>
      </div>
    
      <div class="btn">
        <button type="submit">Edit Profile</button>
      </div>
    </div>
  </div>
 <h1>All Reservation</h1>

  <div class="table-layout">
    <div class="table-container">
      <table class="content-table">
        <thead>
          <tr>
            <th> Service Name</th>
            {{-- <th> Service Image</th> --}}
            <th> Price</th>
            <th> Status</th>
            <th> Res Date</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($reservations as $reservation)
          <tr class="active-row ">
            <td>{{$reservation->service->name}}</td>
            {{-- <td>
              <?php $image =$reservation->service->image ?>
              <img src="{{URL::asset("storage/image/$image")}}" alt="image" />
            </td> --}}
            <td>{{$reservation->service->price}}</td>
            <td>{{$reservation->status}}</td>
            <td>{{$reservation->res_date}}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
  
</div>




{{-- 
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
    </div> --}}




{{-- Table Reservation --}}





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