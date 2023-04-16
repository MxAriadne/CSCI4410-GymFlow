<!DOCTYPE html>
<html>
  <head>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <link type="text/css" rel="stylesheet" href="gymflow.css" />
    <title>GymFlow</title>
  </head>
  <body>
    <div class="navbar">
      <a href="index.php">Homepage</a>
      <div class="dropdown">
        <button class="dropbtn">Services
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
          <a href="workoutcustomizer.php">Workout Customizer</a>
          <a href="caloriccounter.php">Workout Caloric Counter</a>
          <a href="#">Link 3</a>
        </div>
      </div> 
      <a href="schedule.php">Schedule</a>
      <a href="about.php">About Us</a>
    </div>

    <img src="GymFlow_Logo.png" alt="Gym Flow logo" width="600px" height="400px">
    <br>
    
    <div class="login">
      <h1>Login</h1>
      <form action="authenticate.php" method="post">
        <label for="username">
          <i class="fas fa-user"></i>
        </label>
        <input type="text" name="username" placeholder="Username" id="username" required>
        <label for="password">
          <i class="fas fa-lock"></i>
        </label>
        <input type="password" name="password" placeholder="Password" id="password" required>
        <input type="submit" value="Login">
      </form>
    </div>
    
    <footer>
      <h5>© 2023 GymFlow</h5>
    </footer>
  </body>
</html>
