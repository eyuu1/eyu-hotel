<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="../css/reservation.css">


    <title>reservation</title>
</head>
<body>
    <header>
        <div class="header-container">
                <div class="header-logo">
                    <img src="../resources/arrow logo.jpg" alt="eyu hotel"><span>EyuHotel</span>
                </div>

           
                
                <ul class="nav-btns">
                    <li><a href="../html/home.html">Home</a></li>
                    <li><a href="../html/gallery.html">Gallery</a></li>
                    <li><a href="#">About us</a></li>
                    <li><a href="../html/reservation.html">Reservation</a></li>
                </ul>  
               
            

            <div class="hamburger">
                <span class="aside-lines"></span>
                <span class="aside-lines"></span>
                <span class="aside-lines"></span>
            </div>

            
        </div>
    </header>

      
    <!-- database operations -->
    <?php
     $firstName = $lastName = $phoneNumber = $roomType = "";
     if($_SERVER["REQUEST_METHOD"]=="POST"){
        $firstName = test_Input($_POST["firstName"]);
        $lastName = test_Input($_POST["lastName"]);
        $phoneNumber = test_Input($_POST["phoneNumber"]);
        $roomType = test_Input($_POST["roomType"]);

        $serverName = "localhost";
        $userName = "";
        $password = "";
        $dbName ="eyu_hotel";

        // create connection

        $conn = mysqli_connect($serverName , $userName , $password , $dbName);
        if(!$conn){
            die("connection failed" . mysqli_connect_error());
        }
        
         $sql = "CREATE DATABASE IF NOT EXISTS eyu_hotel";
           
        if(mysqli_query($conn , $sql)){
            echo "eyu hotel database created";
        }
           

        // mysqli_query($conn , "DROP TABLE guests_reservation");
            // create table
            $sql = "CREATE TABLE IF NOT EXISTS guests_reservation(
                Id INT(5) AUTO_INCREMENT PRIMARY KEY,
                first_Name VARCHAR(30) NOT NULL,
                last_Name VARCHAR(30) NOT NULL,
                phone_Number INT(12) NOT NULL,
                room_Type VARCHAR(20) )" ;

                if(!mysqli_query($conn , $sql)){
                    die("'<br>'guests_reservation not table created" . mysqli_connect_error());
                }
            

            $sql = "INSERT INTO guests_reservation( first_Name , last_Name , phone_Number , room_Type) VALUES( '$firstName', '$lastName' , '$phoneNumber' , '$roomType')"  ;      
                if(!mysqli_query($conn , $sql)){
                    die("'<br>'data is not inserted" . mysqli_connect_error());
                }

        mysqli_close($conn);
     }

     function test_Input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
     }
     
             
        


        ?>

    <main>
        <div class="form-container">
            <h3>hotel reservation form</h3>
            <p  id="form-complete">please complete the form below</p>

        
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" id="form" method ="post">
                <div class="form-col1">
                    <div class="input-control">
                        <label for="firstName" class="form-label">First Name</label><br>
                        <input type="text" id="firstName" name="firstName" placeholder="enter your name...">
                        <div class="error"></div>
                    </div>

                    <div class="input-control">
                        <label for="phoneNumber" class="form-label">Phone Number</label><br>
                        <input type="text" id="phoneNumber" name="phoneNumber" placeholder="XXXXXX">
                        <div class="error"></div>
                    </div>
                </div>


                <div class="form-col2">
                    <div class="input-control">
                        <label for="lastName" class="form-label">Last Name</label><br>
                        <input type="text" id="lastName" name="lastName" placeholder="enter last name..." >
                        <div class="error"></div>
                    </div>
                   
                    <div class="input-control">
                        <label for="roomType" class="form-label">Room Type</label><br>
                        <input type="text" id="roomType" name ="roomType">
                        <div class="error"></div>
                    </div>
                </div>

                <input type="submit" id="submit" value="RESERVE">
            </form>
        </div>
    </main>





    <footer class="footer-container">
        
        <div class="footer-logo">
            <img src="../resources/arrow logo.jpg" alt="eyu hotel"><span>EyuHotel</span>
        </div>

        <div class="contact-adress">
          
                <ul>
                    <p>CONTACT</p>
                    <li> Fifth Avenue at Central Park South
                        New York, NY 10019</li>
                    <li>(212) 759-3000 or (888) 850-0909</li>
                    <li>plazareservation@fairmont.com</li>
                    
    
                </ul> 
        </div>

        <div class="more-adress">
           
            <ul>
                <p>MORE</p>
                <li><a href="#">Special Offers</a></li>
                <li><a href="#">Pet Program</a></li>
                <li><a href="#">Diplomats</a></li>
                <li><a href="#">Guest Information</a></li>
                <li><a href="#">Accessibility Information</a></li>

            </ul>     
        </div>

        
        <div class="location-faq">
            <ul>
                <p>ABOUT US</p>
                <li>Frequently Asked Questions </li>
                <li> Location Map</li>
                <li> Press</li>
                <li>Careers</li>
                <li>About eyu Hotels & Resorts </li>
                

            </ul>


        </div>
       
    </footer>


    
    
</body>
<script src="../js/reservation.js"></script>

</html>


