<?php


if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT    vmodel, vcolour, vtype, oname FROM `driver` WHERE CONCAT(`vmodel`, `vcolour`, `vtype`, `oname`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);

}
 else {
    $query = "SELECT    vmodel, vcolour, vtype, oname FROM `driver`";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "youtube");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>

<!DOCTYPE html>
<html>

    <head>
        <title>Car Search Query</title>
    <style>
            body{
      background-color: #f2f2f2;
    }

    h1{
        color: black;
        text-align: center;
      }

    table {
        border-collapse: collapse;
        width: 100%;
        color: #133337;
        font-family: monospace;
        font-size: 25px;
        text-align: left;
      }
      th {
        background-color: #133337;
        color: white;
      }
      tr:nth-child(even) {background-color: #f2f2f2}


      body{        
        padding-top: 60px;
        padding-bottom: 40px;
        background-color: #f2f2f2;
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
            <h1>Vehicle Search Query</h1> <hr>





        <form action="carquery.php" method="post">
            
            <input type="text" name="valueToSearch" placeholder="Value To Search"><br><br>
            <input type="submit" name="search" value="Filter"><br><br>

            <table>
                <tr>
                    <th>Vehicle model</th>
                    <th>Vehicle type</th>
                    <th>Vehicle Colour</th>
                    <th>Owner's name</th>
                </tr>

      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><?php echo $row['vmodel'];?></td>
                    <td><?php echo $row['vtype'];?></td>
                    <td><?php echo $row['vcolour'];?></td>
                    <td><?php echo $row['oname'];?></td>
                </tr>
                <?php endwhile;?>
            </table>
        </form>

    </body>
</html>





