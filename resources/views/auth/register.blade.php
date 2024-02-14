<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>
    <link rel="stylesheet" href="{{asset ('backend/assets/css/login.css')}}">
</head>

<body>

    <div class="login-light"></div>
    <div class="login-box">
	<form method="POST" action="{{ route('register') }}" class="signup-form">
	@csrf
            <input type="checkbox" class="input-check" id="input-check">
            <label for="input-check" class="toggle">
                <span class="text off">off</span>
                <span class="text on">on</span>
            </label>
            <div class="light"></div>
            <h2>Register</h2>
            <div class="input-box wrap-input100 validate-input" data-validate = "Username is required">
                <span class="icon">
                    <ion-icon name="mail"></ion-icon>
                </span>
				<input class="input100" id="username" type="text" name="username" :value="old('username')" required autofocus autocomplete="username">
				<label class="form-control-placeholder" for="username">Username</label>
                <div class="input-line"></div>
            </div>

			<div class="input-box wrap-input100 validate-input" data-validate = "name is required">
                <span class="icon">
                    <ion-icon name="mail"></ion-icon>
                </span>
				<input class="input100" id="name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name">
			      			<label class="form-control-placeholder" for="name">Name</label>
                <div class="input-line"></div>
            </div>

			<div class="input-box validate-input" data-validate = "Phone is required">
                <span class="icon">
                    <ion-icon name="mail"></ion-icon>
                </span>
				<input class="input100" id="phone" type="text" name="phone" :value="old('phone')" required autofocus autocomplete="phone">
			      			<label class="form-control-placeholder" for="name">Phone</label>
                <div class="input-line"></div>
            </div>

			<div class="input-box wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                <span class="icon">
                    <ion-icon name="mail"></ion-icon>
                </span>
				<input class="input100" id="email" type="email" name="email" :value="old('email')" required autofocus autocomplete="email">
			      			<label class="form-control-placeholder" for="email">Email</label>
                <div class="input-line"></div>
            </div>
            <div class="input-box wrap-input100 validate-input" data-validate = "Password is required">
                <span class="icon">
                    <ion-icon name="lock-closed"></ion-icon>
                </span>
                <input class="input100" id="password"
                            type="password"
                            name="password"
                            required autocomplete="current-password">
		              <label class="form-control-placeholder" for="password">Password</label>
		              <span toggle="#password-field" ></span>
                <div class="input-line"></div>
            </div>
			<div class="input-box wrap-input100 validate-input" data-validate = "Confirm Password is required">
                <span class="icon">
                    <ion-icon name="lock-closed"></ion-icon>
                </span>
                <input class="input100" id="password_confirmation"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password">
		              <label class="form-control-placeholder" for="confirm password">Confirm Password</label>
		              <span toggle="#password-field" ></span>
                <div class="input-line"></div>
            </div>

            <button type="submit">Sing up</button>
            <div class="register-link">
                <p>Already Member? <a href="{{ route('login') }}">Go to login</a></p>
            </div>

        </form>
    </div>


    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>
