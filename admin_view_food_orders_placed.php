<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin-view.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="https://res.cloudinary.com/due79afep/image/upload/v1625403924/Group_42_deioms.png" type="image/x-icon">
    <title>Vegan Shop | Admin Page</title>
</head>
<body>
    <div class="container">
        <div class="container-heading">
            <h1>Admin View</h1>
        </div>
        <div class="table-two">
            <div class="table-one-heading">
                <h1>Orders Placed</h1>
            </div>
            <table>
                <tr>
                    <th>Username</th>
                    <th>Food Name</th>
                    <th>Food Price</th>
                    <th>Food Quantity</th>
                    <th>Total Price</th>
                    <th>Order Time</th>
                </tr>
                <?php
                include("connect.php");
                //fetch from database
                $sql_select = "SELECT  * FROM `food_orders`";
                $results = $conn->query($sql_select);

                if($results -> num_rows > 0)
                {
                    //retrieve the selected results from database   
                    $query = "SELECT *FROM `food_orders`";  
                    $results = mysqli_query($conn, $query);  
                    while($row = $results -> fetch_assoc()){
                        ?>
                       <tr>
                           <td><?php echo $row['Username']; ?></td>
                           <td><?php echo $row['Food_name']; ?></td>
                           <td>$<?php echo $row['Food_price']; ?></td>
                           <td><?php echo $row['Food_quantity']; ?></td>
                           <td>$<?php echo $row['Total_price']; ?></td>
                           <td><?php echo $row['Order_time']; ?></td>
                       </tr>
                       <?php
                    }
                }
            ?>
            </table>
        </div>
        <footer>
            <p><a href="admin-landing-page.php">Back</a></p>
        </footer>
        

    </div>
    
</body>

</html>