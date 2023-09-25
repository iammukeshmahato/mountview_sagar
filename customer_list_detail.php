<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Detail</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;

        }
        th, td {
            padding: 10px;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }

        th {
            text-align: left;
        }

        .button {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
        }



    
    </style>
</head>
<body>
<table border="2" width="100%">
    <tr>
      <th>Customer id</th>
        <th>Customer Name</th>
        <th>Customer Email</th>
        <!-- <th>Customer Phone</th> -->
        <th>Type of Room</th>
        <th>Number of Rooms</th>
        <th>Number of Guest</th>
        <th>Arrival Date</th>
        <th>Departure Date</th>
        <!-- <th>Proceed</th> -->
    </tr>
    <?php
    // Create connection
    $conn = new mysqli("localhost", "root", "", "hotel_db");
    $sql = "SELECT * FROM `booking`";  
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>".$row['id']."</td>";
        echo "<td>".$row['name']."</td>";
        echo "<td>".$row['email']."</td>";
        // echo "<td>".$row['number']."</td>";
        echo "<td>".$row['rooms']."</td>";
        echo "<td>".$row['t_room']."</td>";
        echo "<td>".$row['t_guest']."</td>";
        echo "<td>".$row['arrival']."</td>";
        echo "<td>".$row['departure']."</td>";
        // echo "<td><a href='customer_list_detail.php?id=".$row['id']."'>Proceed</a></td>";
        echo "</tr>";
    }
    ?>
</table>

<a style="text-decoration: none;" href="bb.html"><input type="button" name="Back" value="Back"></a></body>
</html>