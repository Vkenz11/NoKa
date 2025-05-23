<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>

    <link rel="stylesheet" href="NokaCSS.css">

    <!-- link fonts -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="background-color: #1b1b1bf5;">
    <div class="register-container">
        <div class="logocontainer">
            <a href="/Main" class="header-logo">
                <img src="./picture references/Vector.png" class="logo">
                <p class="label">
                    Noka 3
                </p>
            </a>
            
        </div>

        <form action="/Register" method="POST">
            @csrf
            <div class="register-inputbox">
                <input type="text" id="email"
                name="email" placeholder="Email">

                <input type="text" id="confirm"
                name="confirm" placeholder="Confirm Email">

                <input type="text" id="username"
                name="username" placeholder="Username">

                <input type="password" id="password"
                name="password" placeholder="Password">

                <input type="text" id="name"
                name="name" placeholder="Name">
            </div>

            <div class="register-gender">
                <label>
                    <input type="radio" id="gender-male"
                    name="gender">
                    <span class="male">M</span>
                </label>

                
                <label>
                    <input type="radio" id="gender-female"
                    name="gender">
                    <span class="female">F</span>
                </label>
            </div>

            <div class="register-tos">
                <label>
                    <input type="checkbox" id="tos"
                    name="tos">
                    <span class="checkstyle"></span>
                    I agree to the Terms of Service
                </label>
            </div>

            <button type="submit" class="register-btn">Register</button>
            <div class="errorbox">
                <p id="error" class="errorstyle"></p>
            </div>
        </form>
    </div>
</body>
<script src="NokaRegister.js"></script>
</html>