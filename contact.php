

  <!doctype html>
  <html lang="en">
    <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  
      <title>CRMS</title>
      <?php
    session_start();
    $connection = mysqli_connect('localhost','root','','mydb1','3308');
  ?>
    </head>
    <body>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <a class="navbar-brand" href="index.php">Campus Recruitment Management System</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
    
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php">About</a>
              </li>
              <li class="nav-item dropdown">
                 
              
             
            </ul>
            
          </div>
        </nav>
  
    
        <div class="container my-4">
            <h2>Contact Us</h2>
            <form>
                <div class="form-group">
                  <label>Email address</label>
                  <input type="textarea" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" required>
                </div>
                <div class="form-group">
                  <label for="exampleFormControlSelect1">Subject</label>
                   <input type="textarea" name="subject" class="form-control" required>
                                </div>
                
            
                <div class="form-group">
                  <label>Elaborate Your Concern</label>
                  <input type="textarea" name="concern" class="form-control" id="exampleFormControlTextarea1" rows="3" required>
                 </div>

                <div class="form-group">
                  <label>Tell us about yourself</label>
                  <input type="textarea" name="about" class="form-control" id="exampleFormControlTextarea2" rows="3" required>
                </div>

                <input type="submit" class="btn btn-primary" name="contact" value="Submit">
              </form>
               
            
        </div>

       <?php
          if(isset($_POST['contact'])){
  

          $connection = mysqli_connect('localhost','root','','mydb1','3308');
          $query = "insert into contact values ('','$_POST[email]','$_POST[subject]','$_POST[concern]','$_POST[about]')";
          $query_run = mysqli_query($connection,$query);
        }
       ?>
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </body>
  </html>