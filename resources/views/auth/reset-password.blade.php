<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password Form</title>
    <link rel="stylesheet" href="{{asset ('backend/assets/css/login.css')}}">
</head>

<body>

    <div class="login-light"></div>
    <div class="login-box">
	<form class="login100-form validate-form" method="POST" action="{{ route('password.store') }}">
                    @csrf
	<input type="hidden" name="token" value="{{ $request->route('token') }}">
            <input type="checkbox" class="input-check" id="input-check">
            <label for="input-check" class="toggle">
                <span class="text off">off</span>
                <span class="text on">on</span>
            </label>
            <div class="light"></div>

            <h2>Reset Password</h2>
            <div class="input-box wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                <span class="icon">
                    <ion-icon name="mail"></ion-icon>
                </span>
				<input class="input100" id="email" type="email" name="email" value="{{ $request->email }}" required autofocus autocomplete="email">
				<x-input-error :messages="$errors->get('email')" class="mt-2 text-danger" />
				<label class="form-control-placeholder" for="email">Email</label>
                <div class="input-line"></div>
            </div>

			<div class="input-box wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                <span class="icon">
                    <ion-icon name="mail"></ion-icon>
                </span>
				<input class="input100" id="password"
                            type="password"
                            name="password"
                            required autocomplete="current-password"
                            >
							<x-input-error :messages="$errors->get('password')" class="mt-2 text-danger" />
				<label class="form-control-placeholder" for="email">New Password</label>
                <div class="input-line"></div>
            </div>

			<div class="input-box wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                <span class="icon">
                    <ion-icon name="mail"></ion-icon>
                </span>
				<input class="input100" id="password_confirmation"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password"
                            >
							<x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-danger" />
				<label class="form-control-placeholder" for="email">Confirm Password</label>
                <div class="input-line"></div>
            </div>
			
			<div>
			<x-auth-session-status class="mt-2 text-success" :status="session('status')" />
					</div>
					<div class="mt-3">
						<x-input-error :messages="$errors->get('email')" class="mt-2 text-danger" />
					</div>

            <button type="submit">Reset Pasword</button>
            <div class="register-link">
                <p><a href="{{ route('login') }}">Go Back To Login</a></p>
            </div>

        </form>
    </div>


    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>
