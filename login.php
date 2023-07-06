<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login</title>
  <link rel="stylesheet" href="./login.css">
</head>

<body>

  <h2>Modal Login Form</h2>

  <button onclick="document.getElementById('idLogin').style.display='block'" style="width:auto;">Login</button>

  <div id="idLogin" class="modal">

    <form class="modal-content animate" action="./php/login.php" method="POST">
      <div class="imgcontainer">
        <span onclick="document.getElementById('idLogin').style.display='none'" class="close" title="Close Modal">&times;</span>
        <img src="./img_avatar2.png" alt="Avatar" class="avatar">
      </div>

      <div class="container">
        <label for="username"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="username" id="username" required>

        <label for="password"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" id="password" required>

        <button type="submit">Login</button>
        <label>
          <input type="checkbox" checked="checked" name="remember"> Remember me
        </label>
      </div>

      <div class="container" style="background-color:#f1f1f1">
        <button type="button" onclick="document.getElementById('idLogin').style.display='none'" class="cancelbtn">Cancel</button>
        <span class="psw">Forgot <a href="#">password?</a></span>
      </div>
      <div class="container register">
        <p>Create Account <a href="./index.php">Sign Up</a>.</p>
      </div>
    </form>
  </div>

  <script>
    // Get the modal
    var modal = document.getElementById('idLogin');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
  </script>
</body>

</html>