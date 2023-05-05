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
     <link rel="icon" href="../images/aamro.png" type="image/icon type" />
     <!-- Title Icon   -->
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




<!-- Section One -->
<div class="boook-content">
    <div class="left">
        <h1>Book an Appointment</h1>
        <img src="../images/book/book2.jpg" alt="book-content">

        <h3>Why Book with Us?</h3>
        <p>At our dental clinic, we provide top-quality dental care in a comfortable and welcoming environment. Our team of experienced and friendly dental professionals are committed to helping you achieve and maintain optimal oral health.</p>
    </div>
    <div class="right">
        <h3>How to Book</h3>
        <p>Booking an appointment with us is easy! You can call us at [phone number] or use our online booking system to schedule your appointment at your convenience.</p>

        <img src="../images/book/book5.jpg" alt="book-content">
        <h3>What to Expect</h3>
        <p>During your appointment, our team will conduct a thorough examination of your teeth and gums, and provide any necessary treatments or recommendations for your oral health. We strive to make your experience as comfortable and stress-free as possible.</p>
    </div>

</div>
<!-- Section One -->


<!--  Book Now  -->

 <div class="main_book">

    <div class="container_book">

        <div class="body_book">
    
    
            <div class="head_book" id="BookNow">
                <h1>Dr. Abdalmajed Dental Clinic</h1>
                <p>Book your appointment today and get ready to show off your healthy smile!</p>
            </div>
    
    {{-- {{dd($services)}} --}}
            <form class="body_box" action="{{Route('user.booking.store')}}" method="post">
                @csrf
                <div class="row_book">
    
                    <div class="col-6">
                        <p>First Name</p>
                        <input type="text"  placeholder="Your Name" name="first_name" value="{{ old('first_name')}}" class="@error('first_name') is-invalid @enderror">
                        <input type="hidden" class="form-control bg-transparent" id="name" placeholder="First Name" name="user_id" value="{{ Auth::user()->id }}">
                        @error('first_name')
                        <div class="alert alert-danger">{{ $message }}</div>
                       @enderror
                    </div>
    
                    <div class="col-6">
                        <p>Last Name</p>
                        <input type="text" placeholder="Last Name" name="last_name" value="{{ old('last_name')}}" class="@error('last_name') is-invalid @enderror">
                        @error('last_name')
                        <div class="alert alert-danger">{{ $message }}</div>
                       @enderror
                    </div>
                 
                 
    
                </div>
                <div class="row_book">
                    <div class="col-6">
                        <p>Email Address </p>
                        <input type="email" placeholder="Email Address" id="email"  name="email" value="{{ old('email')}}" class="@error('email') is-invalid @enderror">
                        @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                       @enderror
                    </div>
                    <div class="col-6">
                        <p>Phone Number </p>
                        <input type="text" placeholder="Phone Number" name="phoneNumber" value="{{ old('phoneNumber')}}" class="@error('phoneNumber') is-invalid @enderror">
                        @error('phoneNumber')
                        <div class="alert alert-danger">{{ $message }}</div>
                       @enderror
                    </div>
                 
                </div>
    
                <div class="row_book">
    
                    <div class="col-6">
                        <p>Select Date</p>
                        <input type="text"  class="form-control bg-transparent datetimepicker-input" id="date_picker" placeholder="Date" data-target="#date3" data-toggle="datetimepicker" name="res_date" value="{{ old('res_date')}}" class="@error('res_date') is-invalid @enderror" />
                        {{-- <input type="date"  id="date" name="res_date" value="{{ old('res_date')}}" class="@error('res_date') is-invalid @enderror"> --}}
                        @error('res_date')
                        <div class="alert alert-danger">{{ $message }}</div>
                       @enderror
                    </div>
                    <div class="col-6">
                        <label for="services_id">Choose a Services:</label>

                        <select name="services_id" id="services"  value="{{ old('services_id')}}" class="@error('services_id') is-invalid @enderror">
                            @foreach ($services as $value)
                                
                            <option value="{{$value->id}}">{{$value->name}}  price : {{$value->price}} JD</option>
                            @endforeach
                        </select>
                        @error('services_id')
                        <div class="alert alert-danger">{{ $message }}</div>
                       @enderror
                    </div>
                
    
                </div>
    
                <div class="row_book">
    
             <div class="col-12">
                    <p> Messages</p>
                    <textarea id="Messages" cols="3" rows="10" name="comment" value="{{ old('comment')}}"></textarea>
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





</div> 

<!--  Book Now  -->



<!-- Thanks -->
<h2 class="thx" >Thank you for choosing our dental clinic. We appreciate your trust and look forward to seeing you at your appointment!</h2>
<!-- Thanks -->
 





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
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
<script language="javascript">
    // var today = new Date();
    // var dd = String(today.getDate()).padStart(2, '0');
    // var mm = String(today.getMonth() + 1).padStart(2, '0');
    // var yyyy = today.getFullYear();

    // today = yyyy + '-' + mm + '-' + dd;
    // $( "#date_picker" ).attr({
    //     changeYear: true,
    //     minDate: today,
    //     maxDate: '+28D',
    // });
    $( function() {
    $( "#date_picker" ).datepicker({ minDate: 4, maxDate: "+1M" });
  } );
        
    </script>
</body>
</html>