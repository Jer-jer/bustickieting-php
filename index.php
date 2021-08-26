<?php  
    include 'myphp.php';    
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/style.css">
        <title>Title</title>
    </head>
    <body>
        <center>
            <div class="container">
                <h1>
                    Yawa Traveling Bus Agency
                </h1>
            </div>
        </center>

        <div class="container totalsales">
            <h3>Total Sales: 
                <?php  
                    $servername = "localhost";
                    $root = "root";
                    $password = "";
                    $dbname = "busdb";
        
                    // Create connection
                    $conn = mysqli_connect($servername, $root, $password, $dbname);
                    // Check connection
                    if (!$conn) {
                        die("Connection failed: " . mysqli_connect_error());
                    }
                    $sql = "SELECT * FROM totalSales;";
                    $result = mysqli_query($conn, $sql);
                    
                    $row = mysqli_fetch_array($result);
                    echo "Php. " .$row[1].".00";
                    mysqli_close($conn);
                ?>
            </h3>
        </div>

        <br>
        
        <div class="container">
            <h1 class="bookticket">Book Ticket</h1>
            <h1 class="buses">Buses</h1>
        </div>

        <br>

        <hr style="border-color: black;">

        <div class="container-fluid bookticket">
            <form action="#" method="post">
                <div class="form-group">
                  <label for="">Passenger Name</label>
                  <input type="text" class="form-control" 
                  name="passengername" id="passengername" aria-describedby="helpId" placeholder="Passenger Name" required>
                </div>

                <div class="form-group">
                  <label for="">Destination</label>
                  <input type="text" class="form-control" 
                  name="dest" id="destpassengername" aria-describedby="helpId" placeholder="Destination" required>
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Choose Bus</label>
                    </div>
                    <select class="custom-select" id="inputGroupSelect01" name="bus" required>
                        <option selected>Choose...</option>
                        <option value="bus1">Bus 1</option>
                        <option value="bus2">Bus 2</option>
                        <option value="bus3">Bus 3</option>
                        <option value="bus4">Bus 4</option>
                        <option value="bus5">Bus 5</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary" name="bookbus">Book Ticket</button>
            </form>
            
            <br>

            <h4>Total Fare: Php. 50</h4>

            <br>
            <br>

            <h4>Passenger Ticket:</h4>
            <h5 class="lead">
                Name: 
                <?php 
                    echo $passenger;
                ?>
            </h5>
            <h5 class="lead">Destination: 
                <?php 
                    echo $dest;
                ?>
            </h5>
            <h5 class="lead">Ticket Number: 
                <?php 
                    echo $id;
                ?>
            </h5>
            <h5 class="lead">Total Fare: Php. 50.00
            </h5>
        </div>

        <div class="container-fluid busess">
            <h3 style="text-align: center!important;">Bus 1</h3>
            <table class="table table-striped table-inverse table-responsive">
                <thead class="thead-inverse">
                    <tr>
                        <th>Ticket Number</th>
                        <th>Passenger Name</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php
                            $servername = "localhost";
                            $root = "root";
                            $password = "";
                            $dbname = "busdb";
                
                            // Create connection
                            $conn = mysqli_connect($servername, $root, $password, $dbname);
                            // Check connection
                            if (!$conn) {
                                die("Connection failed: " . mysqli_connect_error());
                            }

                            $sql = "SELECT * FROM passenger WHERE bus = 'bus1';";
                            $result = mysqli_query($conn, $sql);

                            while($row = mysqli_fetch_array($result)){
                                echo "<tr>
                                        <td>".$row['ticket']."</td>
                                        <td>".$row['passname']."</td>
                                      <tr>";
                            }
                        ?>
                    </tbody>
            </table>

            <h3 style="text-align: center!important;">Bus 2</h3>
            <table class="table table-striped table-inverse table-responsive">
                <thead class="thead-inverse">
                    <tr>
                        <th>Ticket Number</th>
                        <th>Passenger Name</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                            $sql = "SELECT * FROM passenger WHERE bus = 'bus2';";
                            $result = mysqli_query($conn, $sql);

                            while($row = mysqli_fetch_array($result)){
                                echo "<tr>
                                        <td>".$row['ticket']."</td>
                                        <td>".$row['passname']."</td>
                                      <tr>";
                            }
                        ?>
                    </tbody>
            </table>

            <h3 style="text-align: center!important;">Bus 3</h3>
            <table class="table table-striped table-inverse table-responsive">
                <thead class="thead-inverse">
                    <tr>
                        <th>Ticket Number</th>
                        <th>Passenger Name</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php
                            $sql = "SELECT * FROM passenger WHERE bus = 'bus3';";
                            $result = mysqli_query($conn, $sql);

                            while($row = mysqli_fetch_array($result)){
                                echo "<tr>
                                        <td>".$row['ticket']."</td>
                                        <td>".$row['passname']."</td>
                                      <tr>";
                            }
                        ?>
                    </tbody>
            </table>

            <h3 style="text-align: center!important;">Bus 4</h3>
            <table class="table table-striped table-inverse table-responsive">
                <thead class="thead-inverse">
                    <tr>
                        <th>Ticket Number</th>
                        <th>Passenger Name</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php
                            $sql = "SELECT * FROM passenger WHERE bus = 'bus4';";
                            $result = mysqli_query($conn, $sql);

                            while($row = mysqli_fetch_array($result)){
                                echo "<tr>
                                        <td>".$row['ticket']."</td>
                                        <td>".$row['passname']."</td>
                                      <tr>";
                            }
                        ?>
                    </tbody>
            </table>

            <h3 style="text-align: center!important;">Bus 5</h3>
            <table class="table table-striped table-inverse table-responsive">
                <thead class="thead-inverse">
                    <tr>
                        <th>Ticket Number</th>
                        <th>Passenger Name</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php
                            $sql = "SELECT * FROM passenger WHERE bus = 'bus5';";
                            $result = mysqli_query($conn, $sql);

                            while($row = mysqli_fetch_array($result)){
                                echo "<tr>
                                        <td>".$row['ticket']."</td>
                                        <td>".$row['passname']."</td>
                                      <tr>";
                            }
                        ?>
                    </tbody>
            </table>
        </div>
    </body>
</html>