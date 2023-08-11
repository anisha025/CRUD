<!DOCTYPE html>
<html>
<title>Registration</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script src="https://kit.fontawesome.com/2d2642681e.js" crossorigin="anonymous"></script>

<body>

    <!-- Navbar Start -->
    <div class="w3-bar w3-padding w3-amber">
        <a href="/" class="w3-bar-item w3-button"><i class="fa-solid fa-house"></i> Home</a>
        <a href="/registration" class="w3-bar-item w3-button w3-black w3-round"><i class="fa-solid fa-user-plus"></i> Register</a>
        <a href="/login" class="w3-bar-item w3-button"><i class="fa-solid fa-right-to-bracket"></i> Login</a>
    </div>
    <!-- Navbar Ends -->


    <!-- Registration form start -->
    <div class="w3-container" style="margin-top: 50px">
        <div class="w3-modal-content w3-animate-zoom w3-card-4 w3-padding w3-round" style="width: 40%">
            <header class="w3-container w3-border-bottom w3-border-amber w3-center">
                <h2>Registration</h2>
            </header>
            <div class="w3-container w3-padding">
                <form action="/register" method="POST">
                    @csrf
                    <div class="w3-container w3-padding">
                        <label><i class="fa-solid fa-user"></i> Full name</label>
                        <input class="w3-input" type="text" name="fullName" value="" required />
                    </div>

                    <div class="w3-container w3-padding">
                        <label><i class="fa-solid fa-envelope"></i> Email</label>
                        <input id="password" class="w3-input" type="email" name="email" value="" required />
                    </div>
                    <div class="w3-container w3-padding">
                        <label><i class="fa-solid fa-mobile"></i> Phone</label>
                        <input id="password" class="w3-input" type="text" name="phone" value="" required />
                    </div>
                    <div class="w3-container w3-padding">
                        <label><i class="fa-solid fa-location-dot"></i> Address</label>
                        <input id="password" class="w3-input" type="text" name="address" value="" required />
                    </div>
                    <div class="w3-container w3-padding">
                        <label><i class="fa-solid fa-key"></i> Password</label>
                        <input id="password" class="w3-input" type="password" name="password" value="" required />
                    </div>

                    <div class="w3-container w3-padding w3-center">
                        <button type="submit" class="w3-button w3-amber w3-round w3-margin-top w3-hover-black w3-block" required>
                            Register
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>