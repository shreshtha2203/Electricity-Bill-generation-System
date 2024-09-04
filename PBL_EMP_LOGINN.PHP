<!DOCTYPE html>
<html>
<head>
    <title>EBILL</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }
        
        h1 {
            color: #333;
            text-align: center;
        }
        
        form {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            animation: fadein 1s;
        }
        
        input[type="email"], input[type="password"], input[type="submit"] {
            display: block;
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            color: #333;
        }
        
        input[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        
        input[type="submit"]:hover {
            background-color: #2E8B57;
        }
        
        @keyframes fadein {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
    </style>
</head>
<body>
    <h1>ELECTRICITY BILLING ONLINE SYSTEM(E-BILL)</h1>
    <hr>
    <form method="post">
        <strong>EMPLOYEE LOGIN:</strong><br><br>
        <label for="email">Email:</label>
        <input type="email" name="email" placeholder="Email ID"><br><br>
        <label for="password">Password:</label>
        <input type="password" name="password" placeholder="Password"><br><br>
        <input type="submit" value="Login" name="Login"><br><br>
    </form>
</body>
</html>
<?php
if (isset($_POST['login'])) {
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "ebill";
    $conn = mysqli_connect($hostname, $username, $password, $database);
    if($conn==1){
        echo "CONNECTION SUCCESSFUL";
    }
    $username = $_POST['email'];
    $password = $_POST['PASSWORD'];
    $sql = "select * from emp_login WHERE EMAIL='$username' and PASSWORD='$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 0) {
        header('location:PBL_LOGIN_PAGE.php');
    } else {
        header('location:PBL_EMP_DASHBOARD.php');

    }
}
?>
