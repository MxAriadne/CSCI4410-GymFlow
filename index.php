<?php
  require "plugin.php";
  if (isset($_POST['submit'])) {
    $response = loginUser($_POST['username'], $_POST['password']);
  }
?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <link type="text/css" rel="stylesheet" href="gymflow.css" />
    <title>GymFlow</title>
  </head>

  <body>

    <div class="navbar">
      <img src="GymFlow_Logo.png" alt="Gym Flow logo">
      <a href="index.php">Homepage</a>
      <div class="dropdown">
        <button class="dropbtn">Services
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
          <a href="workoutcustomizer.php">Workout Customizer</a>
          <a href="caloriccounter.php">Workout Caloric Counter</a>
        </div>
      </div> 
      <a href="schedule.php">Schedule</a>
      <a href="about.php">About Us</a>
      <a href="account.php">My Account</a>
    </div>
	
    <img src="GymFlow_Logo.png" alt="Gym Flow logo" width="600px" height="400px">
=======
     <div class="image-container">
       <img src = "gymimg16.jpg" alt= "Gym image 16">
       <img src="GymFlow_Logo.png" alt="Gym Flow logo">
       <img src = "gymimg17.jpeg" alt = "Gym image 17">
     </div>
    
<br><br><br>
<p style= "color: #454545; font-size: 30px;">Sweat now, shine later: Get ready to see the results of your hard work pay off.</p>

  <style>
    .image-container{
      display: flex;
      justify-content: space-between;
      background-color:#025577;
    }

   .image-container img{
      width: 33%;
      margin: 0;
    }
 </style>
    
    
<br><br><br><br><br><br>
    
    <div class="image-wrapper">
      <img src="gymimg7.jpg" alt= "Gym image 7">
      <p id = "gympar">Transform your fitness journey with our custom workout builder. Our state-of-the-art platform allows you to create a personalized workout plan tailored to your goals, preferences, and fitness level. Say goodbye to generic workouts and hello to a workout experience that is uniquely yours. Start building your perfect workout today!</p>
   </div>

    <script>
    $(document).ready(function() {
    $(".image-wrapper").hide().fadeIn(2000); // Fades in the image over 2 seconds (2000 milliseconds)
    });
    </script>
	
    <style>
      .image-wrapper{
         background: #025577;
         color: #FFF;
         display:flex;
         align-items: center;
     }
     .image-wrapper img{
        height: 100%;
        width: 400px;
     }
    </style>
    
    <br>

    <p style= "color: #454545; font-size: 30px;">Join us and take the first step towards a healthier, happier you!</p>
    
    <?php if (isset($_SESSION['user'])) { ?>
    <div class="welcome-message">
      <h1>Welcome, <?php echo $_SESSION['user']; ?>!</h1>
      <h2 style="text-align: center; text-decoration: underline;">Current date and time:</h2>
      <p><?php date_default_timezone_set("America/Chicago"); echo date('l, F jS Y - h:i A'); ?></p>
    </div>
    <?php } else { ?>
    <div class="login">
      <h1>Login</h1>
      <p class="error"><?php echo @$response; ?></p>
      <form action="" method="post">
        <label for="username">
          <i class="fas fa-user"></i>
        </label>
        <input type="text" name="username" placeholder="Username" id="username" required>
        <label for="password">
          <i class="fas fa-lock"></i>
        </label>
        <input type="password" name="password" placeholder="Password" id="password" required>
		<br><a href="register.php">Don't have an account? Register here!</a>
        <input type="submit" name="submit" value="Login">
      </form>
    </div>
    <?php } ?>

  <div class="container">
      <p id = "contactpar">We would love to hear from you! Whether you have questions, comments, or just want to say hello, our team is here to help. You can contact us by phone or email, and we'll get back to you as soon as possible. We are dedicated to providing the best possible experience for our members and are always looking for ways to improve. Don't hesitate to reach out and let us know how we can assist you on your fitness journey!</p>  
   <img id = "img14" src="gymimg14.jpg" alt= "Gym image 14">
</div>

<script>
    $(document).ready(function() {
	$("#container").hide().fadeIn(2000); // Fades in the image over 2 seconds (2000 milliseconds)
	});
</script>

    <style>
      .container {
        background: #025577;
        color: #FFF;
        overflow: hidden;
        display: flex; 
        align-items: center;
        justify-content: center; 
      }

      #img14{
       width:400px;
       height: auto;
       margin-left: 90px;
     }
    </style>
    
<br><br><br><br><br><br><br><br><br>
    
    <div class="contact-info">   
       <h1 id = "contactinfo"> Contact </h1>
      <p id ="ct">Our Address: MTSU</p>
       
     <p id = "ct">Email: gymflow@gmail.com</p>
      
     <p id = "ct">Phone: 615-375-1242</p>
      <br> <br> <br>
       <img src = "gymimg18.png" alt = "Gym image 18" width=7% height = 7%>
       <footer>
      <h5>© 2023 GymFlow</h5>
    </footer>
  </div>
    
    <style>
      .contact-info {
        justify-content: center;
        align-items: center;
        text-align: center;  
        background-color: #454545;
        background-size:cover;
        width: 100%;
        height: 60%;
      }

      .contact-info p{
        display: inline-block;
        text-align:center;
        margin: 0;
        padding: 10px;
      } 

      #contactinfo {
       margin-right: 20px;
       font-size: 30px;
       text-decoration: underline;
       color:white;
      }
    </style>

  </body>

</html>