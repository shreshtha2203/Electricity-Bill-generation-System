<HTML>
    <head>
        <title>EBILL</title>
        <style>
            body {
                background-color: #f2f2f2;
                font-family: Arial, sans-serif;
            }
            h1 {
                color: #0066cc;
                text-align: center;
            }
            form {
                background-color: #fff;
                border-radius: 10px;
                box-shadow: 0px 0px 10px #999;
                padding: 20px;
                width: 50%;
                margin: 0 auto;
            }
            label {
                display: block;
                margin-bottom: 10px;
            }
            input[type="text"], input[type="number"], input[type="email"] {
                border-radius: 5px;
                border: 1px solid #ccc;
                padding: 5px;
                width: 100%;
            }
            input[type="submit"] {
                background-color: #0066cc;
                border: none;
                border-radius: 5px;
                color: #fff;
                cursor: pointer;
                padding: 10px;
                width: 100%;
                margin-top: 20px;
            }
            input[type="submit"]:hover {
                background-color: #004080;
            }
        </style>
    </head>
    <BODY>
        <h1>ELECTRICITY BILLING ONLINE SYSTEM(E-BILL)</h1>
        <hr>
        <br><br>
        <strong>USER COMPLAINT:</strong><br><br>
        <form method="post">
            <strong>COMPLAINT:</strong><br><br>
            <label for="CA_NUMBER">CA NUMBER:</label>
            <input type="number" name="CA_NUMBER" placeholder="CA NUMBER"><br><br>
            <label for="COMPLAINT">COMPLAINT BOX:</label>
            <input type="text" name="COMPLAINT" placeholder="PLEASE WRITE YOUR COMPLAIN."><br><br>
            <input type="submit" value="Submit" name="submit"><br><br>
        </form>
    </BODY>
    <HTML>
    <?php
    $conn=mysqli_connect("localhost","root","","ebill");
    if(isset($_POST['submit'])){
        $CA_NUMBER=$_POST['CA_NUMBER'];
        $COMPLAINT=$_POST['COMPLAINT'];
        $sql="insert into complaint(CA_NUMBER,COMPLAINT)VALUES('$CA_NUMBER','$COMPLAINT')";
        $result=mysqli_query($conn,$sql);
        if($result)
            echo "COMPLAINT IS REGISTERED.\n WE REGRET TO THE INCONVIENCE CAUSED.";
        else
        echo "COMPLAINT IS NOT REGISTERED DUE TO SOME MAINTENANCE ISSUE \n PLEASE LET US KNOW YOUR PROBLEM AFTER SOME TIME";
    }
    ?>