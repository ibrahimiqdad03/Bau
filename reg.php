<?php
include("connect.php");
?>

<!DOCTYPE html>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>login</title>
    <link rel="stylesheet" href="reg.css" />
  </head>
  
  <body>

    <ul>
      <li><a href="bau.html">Home</a></li>
      <li><a href="reg.html">Login</a></li>
      <li><a href="serveicesen.html">Student services</a></li>
      <li><a href="https://www.bau.edu.jo/taqweem.aspx" target="_blank"> University calendar</a></li>
      <li><a href="https://www.bau.edu.jo/bauar/Units/Reg/Admissions.aspx" target="_blank"> Admissions portal</a></li>
      <li><a href="https://www.bau.edu.jo/Spotlight.aspx" target="_blank">News</a></li>
      <li><a href="contact.html">Contact with us</a></li>
      <li><a href="https://www.bau.edu.jo/">More</a></li>
      
      
     </ul>

    <br />

    <div class="wrapper">
      <div class="form-wrapper sign-up">
        <form action="connect.php" method="post" >
          <h2>E-learining</h2>

          <div class="input-group">
            <input type="email" required name="id" />
            <label for="">Student ID</label>
          </div>
          <div class="input-group">
            <input type="password" required name="password" />
            <label for="">Password</label>
          </div>
          <div class="forgot-pass">
            <a href="#">Forgot Password?</a>
          </div>
          <button type="submit" class="btn">Login</button>
          <div class="sign-link">
            <p><a href="#" class="signIn-link">Registration</a></p>
          </div>
        </form>
      </div>

      <div class="form-wrapper sign-in">
      <form action="connect.php" method="post" >
          <h2>Registration</h2>
          <div class="input-group">
            <input type="text" required name="id" />
            <label for="">Stundent ID</label>
          </div>
          <div class="input-group">
            <input type="password" required name="password" />
            <label for="">Password</label>
          </div>
          <div class="forgot-pass">
            <a href="#">Forgot Password?</a>
          </div>
          <button type="submit" class="btn">Login</button>
          <div class="sign-link">
            <p><a href="#" class="signUp-link">E-learining</a></p>
          </div>
        </form>
      </div>
    </div>

    <script src="reg.js"></script>
  </body>
</html>
