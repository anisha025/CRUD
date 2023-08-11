<!DOCTYPE html>
<html>
<title>Edit profile</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script src="https://kit.fontawesome.com/2d2642681e.js" crossorigin="anonymous"></script>

<body>
    <!-- Registration form start -->
    <div class="w3-container" style="margin-top: 50px">
        <div class="w3-modal-content w3-animate-zoom w3-card-4 w3-padding w3-round" style="width: 40%">
            <header class="w3-container w3-border-bottom w3-border-amber w3-center">
                <h2>Registration</h2>
            </header>
            <div class="w3-container w3-padding">
                <form action="/registeration-update/{{$student->id}}" method="POST">
                    @csrf
                    <div class="w3-container w3-padding">
                        <label><i class="fa-solid fa-user"></i> Full name</label>
                        <input class="w3-input" type="text" name="fullName" value="{{$student->fullName}}" required />
                    </div>
                    <div class="w3-container w3-padding">
                        <label><i class="fa-solid fa-envelope"></i> Email</label>
                        <input id="password" class="w3-input" type="email" name="email" value="{{$student->email}}" required />
                    </div>
                    <div class="w3-container w3-padding">
                        <label><i class="fa-solid fa-mobile"></i> Phone</label>
                        <input id="password" class="w3-input" type="text" name="phone" value="{{$student->phone}}" required />
                    </div>
                    <div class="w3-container w3-padding">
                        <label><i class="fa-solid fa-location-dot"></i> Address</label>
                        <input id="password" class="w3-input" type="text" name="address" value="{{$student->address}}" required />
                    </div>
                    <div class="w3-container w3-padding">
                        <label><i class="fa-solid fa-key"></i> Password</label>
                        <input id="password" class="w3-input" type="password" name="password" value="{{$student->password}}" required />
                    </div>

                    <div class="w3-container w3-padding w3-center">
                        <button type="submit" class="w3-button w3-amber w3-round w3-margin-top w3-hover-black w3-block" required>
                            Update
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>