<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login and Registration Form</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
     <div class="student" >
    <div class="form-box">
      <div class="button-box">
        <div id="btn"></div>
        <button type="button" class="toggle-btn" onclick="login()">Log In</button>
       <!--<button type="button" class="toggle-btn" onclick="signup()">Sign Up</button> -->
      </div>
      <div class="social-icons">
        <img src="fb.png">
        <img src="tw.png">
        <img src="gp.png">
      </div>
       <form id="login" class="input-group" action="" method="post">
        <input type="text" name="email" required class="input-field" placeholder="Email" required><br><br>
        <input type="text" name="password" required class="input-field" placeholder="Password" required><br><br>
        <button type="submit" name="submit" class="submit-btn">Log In</button><br>
        <a  id="forgot" href="forgotpass.php">Forgot Password</a>
      </form>
        <?php
            session_start();
            $email = "";
            $name = "";
            if(isset($_POST['submit'])){
              // $connection = mysqli_connect("localhost","root","","mydb1");
              $connection = mysqli_connect('localhost','root','','mydb1','3308');
              $query = "select * from stud where email = '$_POST[email]'";
              $query_run = mysqli_query($connection,$query);
              while($row = mysqli_fetch_assoc($query_run)){
                $_SESSION['email'] = $row['email'];
                $_SESSION['name'] = $row['name'];
                if($row['email'] == $_POST['email']){
                  if($row['password'] == $_POST['password']){
                    header("Location: student_dashboard.php");
                  }
                  else{
                    echo "Wrong Password";
                  }

                }
                

              }
            }
        ?>  
        <!--

      <form id="signup" class="input-group">
        <input type="text" class="input-field" placeholder="Email" required><br><br>
        <input type="text" class="input-field" placeholder="Password" required><br><br>
        <input type="checkbox" class="chech-box"><span>I agree to the terms and condition</span><br><br>
        <button type="submit" class="submit-btn">Sign Up</button>
      </form>
    -->
    </div>
      
     </div>

     <script>
        var x = document.getElementById("login");
        <!-- var y = document.getElementById("signup"); -->
        var z = document.getElementById("btn");

       <!--
          function signup(){
          x.style.left="-400px";
          y.style.left="50px";
          z.style.left="110px";
        } 
        function login(){
          x.style.left="50px";
          y.style.left="450px";
          z.style.left="0px";
        }

        -->

     </script>
  </body>
</html>
