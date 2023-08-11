<!DOCTYPE html>
<html>
<title>Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script src="https://kit.fontawesome.com/2d2642681e.js" crossorigin="anonymous"></script>

<body>

    <!-- Navbar Start -->
    <div class="w3-bar w3-padding w3-amber">
        <a href="/" class="w3-bar-item w3-button"><i class="fa-solid fa-home"></i> Home</a>
        <a href="/registration" class="w3-bar-item w3-button"><i class="fa-solid fa-user-plus"></i> Register</a>
        <a href="/login" class="w3-bar-item w3-button w3-black w3-round"><i class="fa-solid fa-right-to-bracket"></i> Login</a>
    </div>
    <!-- Navbar Ends -->

    <div class="w3-container" style="margin-top: 50px">
        <div class="w3-modal-content w3-animate-zoom w3-card-4 w3-padding w3-round" style="width: 40%">
            <header class="w3-container w3-border-bottom w3-border-amber w3-center">
                <h2>Login</h2>
            </header>
            <div class="w3-container w3-padding">
                <form action="" method="POST">
                    <div class="w3-container w3-padding">
                        <label><i class="fa-solid fa-envelope"></i> Email</label>
                        <input class="w3-input" type="text" name="id" value="" required />
                    </div>
                    <br />

                    <div class="w3-container w3-padding">
                        <label><i class="fa-solid fa-key"></i> Password</label>
                        <input id="password" class="w3-input" type="password" name="password" value="" required />
                    </div>
                    <div class="w3-container w3-padding">
                        <input class="w3-check" type="checkbox" onclick="passwordVisibility()" />
                        <label for="check"> Show password</label>
                    </div>

                    <div class="w3-container w3-center">
                        <button type="submit" class="w3-button w3-amber w3-round w3-margin-top w3-block w3-hover-black" required>
                            Login
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        function passwordVisibility() {
            let x = document.getElementById("password");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>

</body>

</html>