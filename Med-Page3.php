
<?php

include 'connection.php';

?>



<!DOCTYPE html>

<html> 

<head> 


    <!-- CSS linked -->
    <link rel="stylesheet" type="text/css" href="Medical-Page3.css" >

    <!--Font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

</head>

<body>

    <!-- Header Section Start -->
    <header>

        <input type="checkbox" name="" id="toggler">
        <label for="toggler" class="fas fa-bars"></label>

        <a href="#" class="logo"> HOPE <span> . </span> </a> 

        <nav class="navbar">
            <a href="HP10.php" class="Home"> Home </a>
            <a href="#Products"> Products </a>
            <a href="#review"> Review </a>
            <a href="Login-Page.php"> Login </a>
            <a href="https://outlook.office.com/mail/"> Contact Us </a>
        </nav>

        <div class="icons">
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-shopping-cart"></a>

        </div>

    </header>

    <!-- Header Section End -->
        
    <!-- Info section start -->

    <section>
        <br> <br> <br> <br> <br>
    </section>


    <section class="About" id="About">
      
        <h1 class="heading1"> <span> Medications </span> : </h1>
  
        <div class="row"> 
  
          <div class="video-container">
  
            <video src="vid-medP.mov" loop autoplay muted ></video>
            <h3> Information About Medications : </h3>
  
          </div>
  
          <div class="content1">
            <h3> Painkillers : </h3>
  
            <P>  Painkillers are used to reduce the pain we feel, such as headaches, sore muscles or joints, and other pains. There are different types of painkillers, as they differ according to their 
                mechanism of action and their suitability to your health condition. </P>
              
          </div>
  
        </div>
  
      </section>


      <!-- Info section End -->

  

    <!-- Products Section Start -->


    <section class="Products" id="Products">
        
        <h1 class="heading"> Latest <span> Medications </span> </h1>

        <div class="box-container">

        

            <?php 

                $query = 'SELECT * from med';


                $stmt = $conn->prepare($query);
                $stmt->execute(); 


                $results = $stmt->fetchAll(); 


                foreach($results as $result) 
               
               
              //  echo $result['med_name'];


                {
            ?> 
            <div class="box">
                <span class="discount">  <i class="fa-regular fa-newspaper"></i> </span>
                <div class="image">
                <img src=" <?php echo $result['me_image'] ?> " alt="" width="250">

                    <div class="icons">
                        <a href="#" class="fas fa-heart"> </a>
                        <a href="#" class="cart-btn">add to cart</a>
                        <a href="#" class="fas fa-share"> </a>
                    </div>
                    </div>

                <div class="content">

                    <h2 class="med_name"> <?php echo $result['med_name'] ?> </h2>

                    <h3 class="type"> <?php echo $result['type'] ?> <br> <i class="fa-solid fa-pills"> </i> </h3>
                    <div class="price"> <?php echo $result['price'] ?> <span>  </span> </div>
                </div>

            </div>

            <?php } ?> 

            <!-- box 2 -->

            <div class="box">

                <span class="discount"> -5% </span>
                
                <div class="image">
                    <img src="nurofen.jpeg" alt="" width="250">

                    <div class="icons">
                        <a href="#" class="fas fa-heart"> </a>
                        <a href="#" class="cart-btn">add to cart</a>
                        <a href="#" class="fas fa-share"> </a>

                    </div>
                </div>

                <div class="content">
                    <h3> syrup, is an analgesic, antipyretic and anti-inflammatory <br> 
                    <i class="fa-solid fa-prescription-bottle"> <i class="fa-solid fa-child"></i> </i> </h3>
                    <div class="price"> 10.00 SR <span> 15.00 SR </span> </div>
                </div>


            </div>


            <!-- box 3 -->

            <div class="box">

                            
<span class="discount"> <i class="fa-regular fa-newspaper"></i> </span>
<div class="image">
    <img src="feroton.jpeg" alt="" width="250">

    <div class="icons">
        <a href="#" class="fas fa-heart"> </a>
        <a href="#" class="cart-btn">add to cart</a>
        <a href="#" class="fas fa-share"> </a>

    </div>
</div>

<div class="content">
    <h3> Dietary supplment - iron <br> <i class="fa-solid fa-vials"></i> </h3>
    <div class="price"> 84.60 SR  </div>
</div>


</div>






        </div>
    </section>


     <!-- Produacts Section End -->

<br> <br> <br>
     <!-- Review Section-->

     <section class="review" id="review">
        <i class="heading2"> customer's <span> review </span> </i>

        <br>
        <br>
        <br>
        <br>


        <div class="box-container"> 

            <div class="box2">
                <div class="stars"> 
                    <i class="fas fa-star"> </i>
                    <i class="fas fa-star"> </i>
                    <i class="fas fa-star"> </i>
                    <i class="fas fa-star"> </i>
                    <i class="fas fa-star"> </i>
                </div>

                <P> it was Fast to deliverd and above that it was free delivery , thank you hope Pharmacy </P>
                <div class="user"> 
                    <img src="customer.png" alt="">
                    <div class="user-info">
                        <h3> noura </h3>
                        <span>happy customer </span>
                    </div>
                </div>

                <span class="fas fa-quote-right"></span>

            </div>

            <!-- box 2 -->
            <div class="box2">
                <div class="stars"> 
                    <i class="fas fa-star"> </i>
                    <i class="fas fa-star"> </i>
                    <i class="fas fa-star"> </i>
                    <i class="fas fa-star"> </i>
                </div>

                <P> thank you hope Pharmacy , for the fast replay about my question .</P>
                <div class="user"> 
                    <img src="customer.png" alt="">
                    <div class="user-info">
                        <h3> amal </h3>
                        <span> happy customer </span>
                    </div>
                </div>

                <span class="fas fa-quote-right"></span>
                
            </div>

                        <!-- box 3 -->
                        <div class="box2">
                            <div class="stars"> 
                                <i class="fas fa-star"> </i>
                                <i class="fas fa-star"> </i>
                                <i class="fas fa-star"> </i>
                                <i class="fas fa-star"> </i>
                                <i class="fas fa-star"> </i>
                            </div>
            
                            <P> it was Fast to deliverd, thank you hope Pharmacy </P>
                            <div class="user"> 
                                <img src="customer.png" alt="">
                                <div class="user-info">
                                    <h3> sara </h3>
                                    <span>happy customer </span>
                                </div>
                            </div>
            
                            <span class="fas fa-quote-right"></span>
                            
                        </div>

                                    <!-- box 4 -->
            <div class="box2">
                <div class="stars"> 
                    <i class="fas fa-star"> </i>
                    <i class="fas fa-star"> </i>
                    <i class="fas fa-star"> </i>
                    <i class="fas fa-star"> </i>
                    <i class="fas fa-star"> </i>
                </div>

                <P> i'm happy that i fond what ia need , thank you. </P>
                <div class="user"> 
                    <img src="customer2.png" alt="">
                    <div class="user-info">
                        <h3> mohamed </h3>
                        <span>happy customer </span>
                    </div>
                </div>

                <span class="fas fa-quote-right"></span>
                
            </div>

        </div>


     </section>

     <!-- Review Section End -->

     <br> <br> <br> <br> <br>
     <br> <br> <br> <br> <br>

     <!-- Footer Section start -->
     
     <section class="footer">
        <div class="box-container">
            
            <div class="box">
            <h3> Quick links </h3>
            <a href="#"> Home </a>
            <a href="#"> Produacts </a>
            <a href="#"> Review </a>
            </div>

            <div class="box">
                <h3> Locations </h3>
                <a href="#"> Qassim </a>
                <a href="#"> Riaydh </a>
                <a href="#"> Makkah </a>
                <a href="#"> Dhahran </a>
                </div>

                <div class="box">
                    <h3> Contact Info </h3>
                    <a href="#"> 966-583533889 </a>
                    <a href="#"> hope@gmail.com </a>
                    <a href="#"> buraidah - Saudi Arabia </a>
                    <img src="payment1.jpeg" alt="" width="60">
                    <img src="payment3.png" alt="" width="60">
                    </div>

        </div>

        <div class="credit"> created by <span> UOM - Mustaqbal University Students </span> | all rights reserved</div>

     </section>
    
      <!-- Footer Section End -->

</body>

</html>



