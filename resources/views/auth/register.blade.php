<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Héritage des Toiles | Sign Up</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="img/icons/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/resources/css/style.css">
    <link rel="stylesheet" href="{{ asset('css/filament/style.css') }}">
</head>
<body>
    <div class="container">
        <div class="login-box">
            <h1>Daftar</h1>
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="textbox">
                    <input type="text" name="name" placeholder="Name" value="{{ old('name') }}" required>
                    @error('name')
                        <small style="color: red;">{{ $message }}</small>
                    @enderror
                </div>
                <div class="textbox">
                    <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" required>
                    @error('email')
                        <small style="color: red;">{{ $message }}</small>
                    @enderror
                </div>
                
                <div class="textbox">
                    <input type="password" name="password" placeholder="Password" required>
                    @error('password')
                        <small style="color: red;">{{ $message }}</small>
                    @enderror
                </div>
                <div class="textbox">
                    <input type="password" name="password_confirmation" placeholder="Confirm Password" required>
                </div>
                <input class="btn" type="submit" value="Daftar">
            </form>


        </div>
    </div>
</body>
</html>
