<!DOCTYPE html>
<html>
<head>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link type="text/css" rel="stylesheet" href="gymflow.css" />
</head>
<body>
<H1>SCHEDULE </H1>
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

  <img id = "cal" src = "gymimg13.jpg" alt = "Gym image 13">


 <br> <br> <br> <br> <br> <br>
 

  
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
