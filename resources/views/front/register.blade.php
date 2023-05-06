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
    <title> Register </title>

    
     <!-- Title Icon   -->
     <link rel="icon" href="images/aamro.png" type="image/icon type" />  
        <!-- Link CSS -->
        <link rel="stylesheet" href="{{ asset('CSS/register.css')}}">
        <!-- Font Awesome -->
        <script src="https://kit.fontawesome.com/3692f58ddc.js" crossorigin="anonymous"></script>
        <!-- Google Font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
    
 <style>

    @import url('https://fonts.googleapis.com/css2?family=Dosis:wght@200;300;400;500;600;700;800&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');

    body {
    background: url('../images/Register/Register.png');
    opacity: 0.8;
    background-repeat: no-repeat;
    background-size:cover; 
    height: 60vh;
    width: 80vw;

    display: flex;
        align-items: center;
        justify-content: center
    }


    body {
        background-repeat: no-repeat;
        background-size:cover; 
        background-position:  center center;
        min-height: 100vh;
        max-width: 100%;
  }
  
  @media (max-width : 767px) {
    body {

  display: flex;
  align-items: center;
  justify-content: center;
  min-height: 100vh;
  height: 100vh;

  max-width: 100%;
  }
  .Form_register {
    width: 290px;
    margin: 10% 1%;
}
  }

 </style>


</head>
<body>
    



    <div class="register">


        <div class="Form_register">

            <h1> Sign Up </h1>
            <form action="{{route('user.signup.store')}}" method="post" >
                @method('HEAD')
                @csrf
                {{-- Name --}}
                <input type="text" id="" placeholder="Name" name="name" value="{{ old('name')}}" class="@error('name') is-invalid @enderror">
                    @error('name')
                    <div class="error">{{ $message }}</div>
                @enderror
                {{-- Phone Number --}}
                <input type="phone" placeholder="Phone Number" name="phone" value="{{ old('phone')}}" class="@error('phone') is-invalid @enderror">
                @error('phone')
                <div class="error">{{ $message }}</div>
               @enderror
               {{-- Email --}}
                <input type="email" id="" placeholder="Email" name="email" value="{{ old('email')}}" class="@error('email') is-invalid @enderror">
                    @error('email')
                    <div class="error">{{ $message }}</div>
                @enderror
               {{-- Password --}}
                <input type="password"  id="" placeholder="Password"  name="password" value="{{ old('password')}}" class="@error('password') is-invalid @enderror">
                    @error('password')
                    <div class="error">{{ $message }}</div>
                @enderror
          

            <div class="term">
                <input type="checkbox" name="" id="checkbox">
                <label for="checkbox"> 
                    I agree to these 
                    <a href="#"> Terms & Conditions </a> 
                </label>
            </div>

            <button type="submit"> Sign Up </button>
        </form>
            <div class="member">
                Already Member <a href="{{ route('login') }}"> Login Here</a>
            </div>

        </div>
        
    </div>



    </body>
    </html>

