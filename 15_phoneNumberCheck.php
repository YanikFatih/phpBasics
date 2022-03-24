<?php

    if($_POST){
        echo "POST exists <hr>";

        $phoneNumber = $_POST['phoneNumber'];

        if(!is_numeric($phoneNumber)){
            
            echo "Phone number is improper!";
            header("Refresh:3");
            
        }else{
            echo "Phone number is proper.";
        }

    } else{
        
        echo "POST does not exist <hr>";
    
        ?>

        <!DOCTYPE html>
        <head>
            <meta charset="UTF-8">
            <title>Phone Number</title>
        </head>
        <body>
            
            <form method="POST" action="">

                <input type="text" name="phoneNumber" placeholder="phone number" required maxLength="10" minLength="10">
                <input type="submit" value="SEND">

            </form>

        </body>
        </html>
        
        <?php

    }
?>