<!DOCTYPE html>
<html>
  <head>
    <title>EMP_DASHBOARD</title>
    <style>
      /* CSS styles */
      body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
      }
      h1 {
        text-align: center;
        margin-top: 20px;
      }
      hr {
        border: none;
        height: 2px;
        background-color: #333;
        margin-top: 20px;
      }
      form {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-top: 50px;
      }
      input[type="button"] {
        padding: 10px 20px;
        font-size: 18px;
        background-color: #0099cc;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);
        transition: all 0.3s ease-in-out;
        margin-bottom: 20px;
      }
      input[type="button"]:hover {
        background-color: #0077b3;
        box-shadow: 4px 4px 8px rgba(0, 0, 0, 0.5);
        transform: translateY(-2px);
      }
    </style>
  </head>
  <body>
    <h1>ELECTRICITY BILLING ONLINE SYSTEM(E-BILL)</h1>
    <hr />
    <br /><br />
    <strong>EMPLOYEE DASHBOARD</strong>
    <br /><br />
    <form>
      <a href="PBL_NEW_HOUSE_REGISTRATION_FORM.php">
        <input type="button" value="NEW HOUSE REGISTRATION" />
      </a>
      <a href="PBL_VALIDATE_CA_NO_FOR_UPDATION_AND_UPDATE_DETAILS.php">
        <input type="button" value="UPDATE DETAILS" />
      </a>
    </form>
  </body>
</html>
