<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="./register.css">

</head>

<body>
    <h2>Modal Signup Form</h2>

    <button onclick="document.getElementById('idSignup').style.display='block'" style="width:auto;">Sign Up</button>

    <div id="idSignup" class="modal">
        <span onclick="document.getElementById('idSignup').style.display='none'" class="close" title="Close Modal">&times;</span>
        <form class="modal-content" action="./php/register.php" method="POST">
            <div class="container">
                <h1>Sign Up</h1>
                <p>Please fill in this form to create an account.</p>
                <hr>
                <label for="email"><b>Email</b></label>
                <input type="text" placeholder="Enter Email" name="email" id="email" required>

                <label for="username"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="username" id="username" required>

                <label for="password"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="password" id="password" required>




                <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

                <div class="clearfix">
                    <button type="button" onclick="document.getElementById('idSignup').style.display='none'" class="cancelbtn">Cancel</button>
                    <button type="submit" class="signupbtn">Sign Up</button>
                </div>
                <div class="container signin">
                    <p>Already have an account? <a href="./login.php">Sign in</a>.</p>
                </div>
            </div>
        </form>
    </div>

    <script>
        // Get the modal
        var modal = document.getElementById('idSignup');

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
</body>

</html>