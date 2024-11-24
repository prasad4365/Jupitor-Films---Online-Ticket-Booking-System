<?php

if (isset($_POST["submit_btn"])) {
    
    $Film_Name = $_POST["Film_Name"];
    $Date = $_POST["Date"];
    $Time = $_POST["Time"];
    $Box_Qty = $_POST["Box_Qty"];
    $ODC_Qty = $_POST["ODC_Qty"];
    $Cus_Name = $_POST["Cus_Name"];
    $Contact_No = $_POST["Contact_No"];
    $Email = $_POST["Email"];

    if ((!empty($Film_Name) && !empty($Date) && !empty($Time)  && !empty($Cus_Name) && !empty($Contact_No) && !empty($Email)) && (!empty($Box_Qty) || !empty($ODC_Qty))) {

        include("connection.php");

        $sql1 = "use jupitor";
        $result = mysqli_query($conn, $sql1);
        if (!$result) {
            die("ERROR : " . mysqli_error($conn));
        } else {
            echo "used Jupitor";
        }

        $sql2 = "INSERT INTO tickets(FilmName,Date,ShowTime,BoxTickets,ODCTickets,CustomerName,ContactNo,Email)
                VALUES('$Film_Name','$Date','$Time','$Box_Qty','$ODC_Qty','$Cus_Name','$Contact_No','$Email')";
        $result = mysqli_query($conn, $sql2);
        if (!$result) {
            die("ERROR : " . mysqli_error($conn));
        } else {
            
            echo "<html>
            <head>
                <style>
                body{
                    background-color:black;

                }
                 h2{
                        color:green;
                        text-aling:center;
                        font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
                        font-size:50px;
                        padding-left:10%;
                        padding-top:20%;
                    }
                    
                    
                   
                   
                </style>
            </head>

            <body>
                    
                    
                    <h2>Thank You ".$Cus_Name." Enjoy the Movie well !!!</h2>
                    
            </body>
         </html>";
        }
        mysqli_close($conn);
    } else {
        echo "<html>
                <head>
                    <style>
                    body{
                        background-color:black;

                    }
                     h2{
                            color:red;
                            text-aling:center;
                            font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
                            font-size:50px;
                            padding-left:30%;
                            padding-top:20%;
                        }
                        
                        
                       
                       
                    </style>
                </head>

                <body>
                        
                        
                        <h2>Please fill the all details !!! </h2>
                        
                </body>
             </html>";
    }
  


}
   

?>