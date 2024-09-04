<HTML>
    <head>
        <title>EBILL</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f4f4f4;
            }
            h1 {
        color: #696969;
        text-align: center;
    }

    table {
        margin: 0 auto;
        border-collapse: collapse;
        border: 2px solid #ddd;
        width: 90%;
        max-width: 900px;
    }

    th,
    td {
        text-align: center;
        padding: 12px;
        border: 1px solid #ddd;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2
    }

    tr:hover {
        background-color: #ddd;
    }

    input[type=number],
    input[type=text],
    input[type=submit],
    input[type=button] {
        display: block;
        margin: 0 auto;
        border: none;
        padding: 10px;
        width: 90%;
        max-width: 400px;
        border-radius: 5px;
        font-size: 16px;
        background-color: #fff;
        box-shadow: 0px 1px 2px #ccc;
    }

    input[type=submit]:hover,
    input[type=button]:hover {
        background-color: #ddd;
        cursor: pointer;
    }

    input[type=submit],
    input[type=button] a {
        text-decoration: none;
        color: #fff;
        background-color: #4CAF50;
        border: none;
        display: block;
        margin: 0 auto;
        width: 50%;
        max-width: 200px;
        border-radius: 5px;
        padding: 10px;
        margin-top: 10px;
        box-shadow: 0px 1px 2px #ccc;
        transition: background-color 0.3s ease;
    }

    input[type=submit]:hover,
    input[type=button] a:hover {
        background-color: #3e8e41;
        cursor: pointer;
    }

    input[type=submit]:focus,
    input[type=button] a:focus {
        outline: none;
    }

    .blink {
        animation: blinker 0.5s linear infinite;
    }

    @keyframes blinker {
        50% {
            opacity: 0;
        }
    }

</style>
</head>
<BODY>
    <H1>ELECTRICITY BILLING ONLINE SYSTEM(E-BILL)</H1>
    <HR>
        <strong>USER LOGIN:</strong><BR><BR>

            <FORM method="POST">
            
            
                <LABEl for="CA NUMBER">CA NUMBER:</LABEl>
                <input type="number" name="CA_NUMBER" placeholder="CA NUMBER"><BR><BR>
                <LABEl for="AADHAR NUMBER">AADHAR NUMBER:</LABEl>
                <input type="number" name="AADHAR_NUMBER" placeholder="AADHAR NUMBER"><BR><BR>
                <input type="submit" value="LOGIN" name="submit">
                <a href="PBL_LOGOUT.php"><input type="button" value="LOGOUT"></a>
            
            </FORM>
            <?php
            error_reporting(E_ALL);
            ini_set('display_errors', 1);
            if (isset($_POST['submit'])) {
                $CA_NUMBER = $_POST['CA_NUMBER'];
                $AADHAR_NUMBER = $_POST['AADHAR_NUMBER'];
                $conn = mysqli_connect("localhost", "root", "", "ebill");
                $sql = "select * FROM customers where CA_NUMBER=$CA_NUMBER and AADHAR_NUMBER=$AADHAR_NUMBER ";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) == 1) {
                    echo '<html>';
                    echo '<head><title>USER DATA</title></head>';
                    echo '<body>';
                    echo '<h1>ELECTRICITY BILLING ONLINE SYSTEM(E-BILL)</h1>';
                    echo '<table>';
                    echo '<tr><th>FIRST NAME</th><th>LAST NAME</th><th>ADDRESS</th><th>AADHAR NUMBER</th><th>PHONE NUMBER</th><th>EMAIL</th><th>CA NUMBER</th><th>UNITS CONSUMED</th><th>TOTAL AMOUNT TO BE PAID</th></tr>';
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<tr>';
                        echo '<td>' . $row['FNAME'] . '</td>';
                        echo '<td>' . $row['LNAME'] . '</td>';
                        echo '<td>' . $row['ADDRESS'] . '</td>';
                        echo '<td>' . $row['AADHAR_NUMBER'] . '</td>';
                        echo '<td>' . $row['PHONE_NUMBER'] . '</td>';
                        echo '<td>' . $row['EMAIL'] . '</td>';
                        echo '<td>' . $row['CA_NUMBER'] . '</td>';
                        echo '<td>' . $row['UNITS_CONSUMED'] . '</td>';
                        echo '<td>' . $row['TOTAL_AMOUNT'] . '</td>';
                        echo '</tr>';
                    }
                    echo '</table>';
                    echo '<form method="post"><input type="submit" name="PAY" value="PAY NOW"></form>';
                    echo '</body>';
                    echo '</html>';
                } else {
        
                    echo "<h1>" . "USER NOT FOUND" . "</h1>";
                }
            }
            ?>
            <?php
                if (isset($_POST['PAY'])) {
                    $conn=mysqli_connect("localhost","root","","ebill");
                    // Update the customer data in the database
                    $sql = "UPDATE customers SET UNITS_CONSUMED=0" ;
                    $sql1="UPDATE customers SET TOTAL_AMOUNT=0 ";
                    $result = mysqli_query($conn, $sql);
                    $result1 = mysqli_query($conn, $sql1);
        
                    if ($result == 1 && $result1==1) {
                        echo "AMOUNT PAID SUCCESSFULLY.";
                    } else {
                        echo "AMOUNT CAN'T BE PAID NOW DUE TO SERVER ISSUE SUCCESSFULLY";
                    }
                }
            
            ?>
        </BODY>
        
        </HTML>
            