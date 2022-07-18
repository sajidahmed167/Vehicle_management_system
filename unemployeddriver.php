<!DOCTYPE html>
<html>
<head>
<title>Unemployed driver</title>
<style>

    body{
      background-color: #f2f2f2;
      padding-top: 60px;
        padding-bottom: 40px;
    }

    table {
        border-collapse: collapse;
        width: 100%;
        color: #9B1B30;
        font-family: monospace;
        font-size: 25px;
        text-align: left;
      }
      th {
        background-color: #9B1B30;
        color: white;
      }
      tr:nth-child(even) {background-color: #f2f2f2}
      h1{
        color: #black;
        text-align: center;
      }

      .container{
        width: 80%;
        margin: 0 auto; /* Center the DIV horizontally */
    }
    .fixed-header, .fixed-footer{
        width: 100%;
        position: fixed;        
        background: #333;
        padding: 10px 0;
        color: black;
    }
    .fixed-header{
        top: 0;
    }
    .fixed-footer{
        bottom: 0;
    }    
    /* Some more styles to beutify this example */
    nav a{
        color: #fff;
        float: left;
        text-decoration: none;
        padding: 7px 25px;
        display: inline-block;
        float: right;
    }
    .container p{
        line-height: 200px; /* Create scrollbar to test positioning */
    }


</style>
</head>
<body>
      <div class="fixed-header">
        <div>
        <img src="logo.gif" height="80px">
        <img src="logo-font.jpg" height="100px">            
        </div>
        <div class="container">
            <nav>
                <a href="home.html">Contact Us</a>
                <a href="feedback.html">Feedback</a>
                <a href="car.html">Vehicle Register form</a>
                <a href="driver.html">Driver Register form</a>
                <a href="unemployeddriver.php">Search Drivers</a>
                <a href="carquery.php">Vehicle Search Query</a>
                <a href="home.html">Home</a>
            </nav>
        </div>
    </div>





      <br><br><br><br><br>
      <h1>Drivers For Hire</h1> <hr>
      <br><br>
      <table>
      <tr>
        <th>Driver Name</th>
        <th>Country code(phone)</th>
        <th>Phone Number</th>
      </tr>
      <?php
      $conn = mysqli_connect("localhost", "root", "", "youtube");
      // Check connection
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
      $sql = "SELECT username, phoneCode, phone FROM register WHERE havedriver = 'n'";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
          echo "<tr><td>" . $row["username"] .  "</td><td>" . $row["phoneCode"]. "</td><td>"
          . $row["phone"]. "</td></tr>";
        }
        echo "</table>";
      } else { echo "0 results"; }
      $conn->close();
      ?>
    </table>
</body>
</html>
