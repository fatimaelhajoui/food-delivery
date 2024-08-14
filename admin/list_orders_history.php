<?php
include('../connection.php');
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: login.html');
	exit;
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Orders</title>
		<link href="style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer">
	</head>
	<body class="loggedin">
		
	<?php include('sidebar.php')?>

	
		<div class="content">
        <h2>Orders Page</h2>
        <div class="container">
       
        <table class="table">
            <thead class="table-warning">
                <tr>
                    <th scope="col">ID Order</th>
                    <th scope="col">Price</th>
                    <th scope="col">Date & Time</th>
                    <th scope="col">Operations</th>
                </tr>
            </thead>
            <tbody>
                <?php

                #query
                $sql = 'SELECT id_order, total, date_time FROM orders Where confirmed=1';

                #execute query
                $result = mysqli_query($con, $sql);

                if ($result) {
                    #output data each row
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['id_order'];
                        $price = $row['total'];
                        $date = $row['date_time'];

                        echo '<tr>
                    <td>' . $id . '</td>
                    <td>' . $price . '</td>
                    <td>' . $date . '</td>
                    <td><button class="btn btn-info"><a href="details_order.php?orderid='.$id.'" class="text-light" style="text-decoration: none;">Details</a></button>
                    </tr>';
                    }
                }
                ?>

            </tbody>
        </table>
    </div>
		</div>
		</div>
	</body>
</html>