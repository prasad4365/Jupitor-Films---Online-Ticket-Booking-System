
<html>
    <head>
        <title>Tickets Booking</title>
        <link  rel="stylesheet" href="JupitorFilmCSS.php">
        <link rel="preconnect" href="https://fonts.googleapis.com">
    </head>

<body>
 <div class="main-content">

 <div class="toolbar">
                <table class="table1">
                   <div class="div1">
                     <tr>
                        <div class="div2">
                            <th><a href="JupitorFilmMain.php">HOME</a></th>
                            <th><a href="JupitorFilms.php">BUY TICKETS</a></th>
                            <th><a href="contact.php">CONTACT</a></th>
                            <th><a href="about.php">ABOUT</a></th>
                        </div>
                     </tr>
                  </div>
                </table>
            </div>

    <table class="table2">
        <tr>
            <td>
            <form action="dataInsert.php" method="POST">
            <div class="frame">
            <h1>Online Tickets Booking</h1>
            <table>
                <tr>
                    <td> Film Name</td>
                    <td><select name="Film_Name" placeholder="Chose film">
                        
                        
                        <option value="Pravegaya">Pravegaya</option>

                        </select>
                     </td>

                </tr>
                <tr>
                    <td>Date</td>
                    <td><input type="date" min="2022-12-04" max="2022-12-31" name="Date"></td>
                </tr>
                <tr>
                    <td>Show time</td>
                    <td>
                        <select name="Time" id="">
                            <option value="10.30">10.30 am</option>
                            <option value="02.30">02.30 pm</option>
                            <option value="04.30">04.30 pm</option>
                            <option value="06.30">06.30 pm</option>
                         </select>
                    </td>
                </tr>
                
                <tr>
                    <td>Tickets type</td>
                    <td><p>Box: <input type="text" size="2" placeholder="Qty" name="Box_Qty"> ODC: <input type="text" size="2" placeholder="Qty" name="ODC_Qty"></p></td>
                </tr>
                <tr>
                    <td>Customer Name</td>
                    <td><input type="text" name="Cus_Name" placeholder="A.B.C Perera"></td>
                    
                </tr>
                <tr>
                    <td>Customer Contact No</td>
                    <td><input type="text" name="Contact_No" placeholder="077-2223334" ></td>
                </tr>
                <tr>
                    <td>Customer Email</td>
                    <td><input type="text" placeholder="abc@gmail.com" name="Email"></td>
                    
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="submit_btn" value="Pay"></td>
                   
                </tr>
                <tr>
                    <td></td>
                    <td><input type="reset" name="clear_btn" value="Reset"></td>
                </tr>
            </table>
            

            </div>
        </form>
            </td>

            <td>

            <div class="background">
                <img src="images/pravegaya.jpg" alt="background">
            </div>

            </td>
        </tr>
    </table>
   
        
        
     </div>
</body>

</html>
