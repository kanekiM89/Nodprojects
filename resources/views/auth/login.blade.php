<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="{{asset ('backend/assets/css/login.css')}}">
</head>

<body>

    <div class="login-light"></div>
    <div class="login-box">
	<form method="POST" action="{{ route('login') }}" class="signin-form">
            @csrf
            <input type="checkbox" class="input-check" id="input-check">
            <label for="input-check" class="toggle">
                <span class="text off">off</span>
                <span class="text on">on</span>
            </label>
            <div class="light"></div>

            <h2>Login</h2>
            <div class="input-box">
                <span class="icon">
                    <ion-icon name="mail"></ion-icon>
                </span>
                <input class="form-control" id="name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" >
				<label class="form-control-placeholder" for="username">Username</label>
                <div class="input-line"></div>
            </div>
            <div class="input-box">
                <span class="icon">
                    <ion-icon name="lock-closed"></ion-icon>
                </span>
                <input id="password" class="form-control"
									type="password"
									name="password"
									required autocomplete="current-password">
							<label class="form-control-placeholder" for="password">Password</label>
                <div class="input-line"></div>
            </div>
			
            <div class="remember-forgot">
                <label><input type="checkbox"> Remember me</label>
                <a href="{{ route('password.request') }}">Forgot Password?</a>
            </div>
			
            <button type="submit">Login</button>
            <div class="register-link">
                <p>Don't have an account? <a href="{{ route('register') }}">Register</a></p>
            </div>
		
        </form>
    </div>


    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>