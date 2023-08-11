<!DOCTYPE html>
<html>
<title>Home</title>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />
<script src="https://kit.fontawesome.com/2d2642681e.js" crossorigin="anonymous"></script>
<style>
    .Edit {
        background-color: rgb(240, 178, 20);
        color: white;
        border: none;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
        border-radius: 5px;
    }

    .Delete {
        background-color: red;
        color: white;
        border: none;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
        border-radius: 5px;
    }

    .student-detail-table {
        width: 100%;
    }
</style>

<body>
    <!-- Navbar Start -->
    <div class="w3-bar w3-padding w3-amber">
        <a href="/" class="w3-bar-item w3-button w3-black w3-round"><i class="fa-solid fa-home"></i> Home</a>
        <a href="/registration" class="w3-bar-item w3-button"><i class="fa-solid fa-user-plus"></i> Register</a>
        <a href="/login" class="w3-bar-item w3-button"><i class="fa-solid fa-right-to-bracket"></i> Login</a>
    </div>
    <!-- Navbar Ends -->

    <!-- Registration form start -->

    <div class="w3-container" style="margin-top: 50px">
        <div class="w3-modal-content w3-animate-zoom w3-padding w3-round student-detail-table">
            <table class="w3-table-all w3-card-4 w3-hoverable">
                <tr class="w3-black">
                    <th>ID</th>
                    <th>Full name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Password</th>
                    <th></th>
                </tr>

                <!-- for each loop here -->
                @foreach($students as $student)
                <tr>
                    <td>{{$student->id}}</td>
                    <td>{{$student->fullName}}</td>
                    <td>{{$student->email}}</td>
                    <td>{{$student->phone}}</td>
                    <td>{{$student->address}}</td>
                    <td>{{$student->password}}</td>
                    <td>
                        <a href="/registration-edit/{{$student->id}}"> <button class="Edit">Edit</button></a>
                        <a href="/student-delete/{{$student->id}}"> <button class="Delete">Delete</button></a>
                    </td>
                </tr>
                @endforeach
                <!-- end of for each loop here -->
            </table>
        </div>
    </div>
</body>

</html>