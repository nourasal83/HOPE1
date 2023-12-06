



<!DOCTYPE html>

<html>
    <head>


        <link rel="stylesheet" type="text/css" href="HP-2.css" >
  
        <link rel="stylesheet" href="HOME PAGE.html">

        <link rel="stylesheet" href="Style Login.css">

        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>


        <body>

            
            <header class="header">  
                <a href="#" class="logo"> HOPE <span> . </span> </a>
                    
                    <nav class="mybar">
                      <a href="HP10.php" class="Home"> Home </a>
                      <a href="Login-Page.php" > Login </a>  </nav>
                     
            
                </header>


              <br>


           <div class="LogPage">
           
            <form action="">
           <h1> Sign In  <i class='bx bx-lock'></i>  </h1>    

           <div class="input-box">
           <input type="text" placeholder="Username" required>

           </div>

           <div class="input-box">
            <input type="email" placeholder="Email" required>
 
            </div>

          <div class="input-box">
          <input type="Password" placeholder="Password" required>

        </div>

          <div class="remember-forget">
          <label> <input type="checkbox"> Remember Me </label>
          </div>
          <br>
          
          <button type="submit" class="button"> Sign In </button>

       <div class="register-link"> You have an account? <a href="Login-Page.php"> Login </a> </div>
       </form>
       </div>


        </body>
    </head>
</html>


<?php 

include 'connection.php';

?>
