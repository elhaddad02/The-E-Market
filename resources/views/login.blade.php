{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- ===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="styleLogin.css">
    <title>Login & Registration Form</title> 
</head>
<body>
    
    <div class="container">
        <div class="forms">
            <!-- Login Form -->
            <div class="form login">
                <span class="title">Login</span>

                <form action="/login" method='POST'>
                    @csrf
                    <div class="input-field">
                        <input type="text" placeholder="Enter your username" name="username" required>
                        <i class="uil uil-envelope icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" class="password" placeholder="Enter your password" name="password" required>
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash showHidePw"></i>
                    </div>

                    <div class="checkbox-text">
                        <div class="checkbox-content">
                            <input type="checkbox" id="logCheck">
                            <label for="logCheck" class="text">Remember me</label>
                        </div>
                        
                        <a href="/forgot-password" class="text">Forgot password?</a>
                    </div>

                    <div class="input-field button">
                        <input type="submit" value="Login">
                    </div>
                </form>

                <div class="login-signup">
                    <span class="text">Not a member?
                        <a href="#" class="text signup-link">Signup Now</a>
                    </span>
                </div>
            </div>

            <!-- Registration Form -->
            <div class="form signup">
                <span class="title">Registration</span>

                <form action="addClient" method='POST'>
                    @csrf
                    <div class="input-field">
                        <input type="text" placeholder="Enter your name" name="username" id='error_username' required>                      
                        <i class="uil uil-user"></i>
                        @error('username')
                        <p  class="error">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="input-field">
                        <input type="text" placeholder="Enter your email" name="email" id='error_email' required>
                        <i class="uil uil-envelope icon"></i>
                        @error('email')
                            <p  class="error">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="input-field">
                        <input type="password" class="password" placeholder="Create a password" name="password" id='error_password' required>
                        <i class="uil uil-lock icon"></i>
                        @error('password')
                            <p  class="error">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="input-field">
                        <input type="password" class="password" placeholder="Confirm a password" name="password_confirmation" id='error_confpass' required>
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash showHidePw"></i>
                        @error('password_confirmation')
                            <p  class="error">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="checkbox-text">
                        <div class="checkbox-content">
                            <input type="checkbox" id="termCon">
                            <label for="termCon" class="text">I accepted all terms and conditions</label>
                        </div>
                    </div>

                    <div class="input-field button">
                        <input type="submit" value="Signup">
                    </div>
                </form>

                <div class="login-signup">
                    <span class="text">Already a member?
                        <a href="#" class="text login-link">Login Now</a>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <script src="{{url('js/jquery.min.js')}}"></script>
    <script>
        $('#myform').submit(function(e) {
        e.preventDefault();
        var form = $('#myform')[0];
        var mydata =  new FormData(form);
        console.log(mydata)
        $.ajax({
            type: 'POST',
            url: '/addClient',
            data: mydata,
            datatype: 'json',
            contentType:false,
            processData:false,
            success: function(data) {
                $('#myform')[0].reset();
                if (data.success == true){
                    document.getElementById('error_username').innerText = '';
                    document.getElementById('error_email').innerText = '';
                    document.getElementById('error_password').innerText = '';
                    document.getElementById('error_confpass').innerText = '';
                    document.getElementById('msg').innerText = 'Registred success';
                }
                console.log(data);
            },
            error: function (data,textStatus,errorThrown){
                console.log(data)
                if(data){
                    if(data.responseJSON.errors){
                        data.responseJSON.errors.username=== undefined ? document.getElementById('error_username').innerText = '' :  document.getElementById('error_username').innerText =  data.responseJSON.errors.username;
                        data.responseJSON.errors.email=== undefined ? document.getElementById('error_email').innerText = '' :  document.getElementById('error_email').innerText = data.responseJSON.errors.email ;
                        data.responseJSON.errors.password=== undefined ? document.getElementById('error_password').innerText = '' :  document.getElementById('error_password').innerText = data.responseJSON.errors.password ;
                        data.responseJSON.errors.confpass=== undefined ? document.getElementById('error_confpass').innerText = '' :  document.getElementById('error_confpass').innerText = data.responseJSON.errors.confpass ;
                        document.getElementById('msg').innerText = '';
                    }
                }
            }
        });
        });
    </script>

    <script src="main.js"></script> 
</body>
</html> --}}