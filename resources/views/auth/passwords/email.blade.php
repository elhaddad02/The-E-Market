<!-- resources/views/auth/passwords/email.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="styleLogin.css">
    {{-- <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.min.css"> --}}
	<title>Document</title>
</head>
<body>

    {{-- <div class="container">
        <div class="forms">{{ __('Reset Password') }}</div>

        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                    <div class="input-field">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="input-field button">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Send Password Reset Link') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div> --}}
	<div class="container">
		<div class="forms">
			<!-- send email Form -->
			<div class="form login">
				<span class="title">Send Email Reset Password</span>
                @if (session('status'))
                <div class="alert alert-success" role="alert" >
                    {{ session('status') }}
                </div>
                 @endif
				<form action="{{ route('password.email') }}" method='POST'>
					@csrf
					<div class="input-field">
						<input type="email" placeholder="Enter your email address" name="email" id="send_email" required><br><br>
					</div>
	
					<div class="input-field button">
						<input type="submit" value="Send Email">
					</div>
				</form>
			</div>		
		</div>
	</div>
</body>
</html>
