<html>
<head>
    <title>UPDATE DETAILS</title>
    <SCRIPT>
        function calc(value) {
            document.getElementById('TOTAL_AMOUNT').value = value * 6;
        }
    
    </SCRIPT>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 5px;
            text-align: center;
        }
        
        input[type=number],
        input[type=text] {
            padding: 5px;
            border: 1px solid black;
            border-radius: 5px;
        }
        
        input[type=submit] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        
        input[type=submit]:hover {
            background-color: #45a049;
        }
    </style>
    </head>
    <body>
        <H1>ELECTRICITY BILLING ONLINE SYSTEM(E-BILL)</H1>
        <HR>
        <BR><br>
            <form method="POST" action="">
                <LABEl for="CA NUMBER">CA NUMBER:</LABEl>
                <input type="number" name="CA_NUMBER" placeholder="CA NUMBER">
                <input type="submit" name="submit" value="SEARCH">
            </form>
            <?php
            if (isset($_POST['submit'])) {
                $CA_NUMBER = $_POST['CA_NUMBER'];
                $conn = mysqli_connect("localhost", "root", "", "ebill");
                $sql = "select * FROM customers where CA_NUMBER=$CA_NUMBER ";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) == 0) {
                    echo "INVALID CA NUMBER";
                }
             
            if (mysqli_num_rows($result) == 1) {
               while($row = mysqli_fetch_assoc($result)){ 
            
            
            ?>
            
            
            <table >
                <tr>
                    <th>FIRST NAME</th>
                    <th>LAST NAME</th>
                    <th>ADDRESS</th>
                    <th>AADHAR NUMBER</th>
                    <th>PHONE NUMBER</th>
                    <th>EMAIL</th>
                    <th>CA NUMBER</th>
                    <th>UNITS CONSUMED</th>
                    <th>TOTAL AMOUNT TO BE PAID</th>
                </tr>
            
                <tr>
                    <td>
                        <?php echo $row["FNAME"]  ?>
                    </td>
                    <td>
                        <?php echo $row["LNAME"]  ?>
                    </td>
                    <td>
                        <?php echo $row["ADDRESS"]  ?>
                    </td>
                    <td>
                        <?php echo $row["AADHAR_NUMBER"] ?>
                    </td>
                    <td>
                        <?php echo $row["PHONE_NUMBER"]  ?>
                    </td>
                    <td>
                        <?php echo $row["EMAIL"]  ?>
                    </td>
                    <td>
                        <?php echo $row["CA_NUMBER"]  ?>
                    </td>
                    <td >
                       <?php echo $row["UNITS_CONSUMED"] ?>
                    </td>
                    <td >
                      <?php echo $row["TOTAL_AMOUNT"]  ?>
                        </form>
                    </td>
                </tr>
                <?php
                }
            }
        }
        ?>
        </table>
        <br><br><strong>UPDATE THE BILLS:</strong><br><br>
        <form method="post">
        <LABEl for="UNITS_CONSUMED">UNITS CONSUMED:</LABEl>
        <input type="TEXT" ID="UNITS_CONSUMED" name="UNITS_CONSUMED" placeholder="UPDATE UNITS CONSUMED" onkeyup="calc(this.value);">

        <LABEl for="TOTAL_AMOUNT">TOTAL_AMOUNT:</LABEl>
        <input type="TEXT" ID="TOTAL_AMOUNT" name="TOTAL_AMOUNT" placeholder="AMOUNT TO BE PAID" >

     <input type="submit" name="Save" value="Save Changes">
     <input type="hidden" name="CA_NUMBER" value="<?php echo $CA_NUMBER ?>">
 </form>
</body>

</html>
<?php
if (isset($_POST['Save'])) {
 $UNITS_CONSUMED = $_POST['UNITS_CONSUMED'];
 $TOTAL_AMOUNT = $_POST['TOTAL_AMOUNT'];
 $CA_NUMBER = $_POST['CA_NUMBER'];
 $conn = mysqli_connect("localhost", "root", "", "ebill");
 $sql = "UPDATE customers SET UNITS_CONSUMED='$UNITS_CONSUMED', TOTAL_AMOUNT='$TOTAL_AMOUNT' WHERE  CA_NUMBER='$CA_NUMBER'";
 mysqli_query($conn, $sql);
}
?>
            
    