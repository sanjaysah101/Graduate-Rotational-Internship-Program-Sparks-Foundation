<?php
    require_once("db.php");
    $sql = "select * from transactiondetails";
    $result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>transaction History</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <!-- <div class="container"> -->
        <?php include_once("nav2.php")?>

        <!-- Customer Table -->
        
        <div class="tableContainer container ">
            <table border="1px" class="customerTable ">
                <thead>
                    <tr>
                        <th>Transaction Id</th>
                        <th>Date</th>
                        <th>Sender's Name</th>
                        <th>Receipent Name</th>
                        <th>Sender's Account No</th>
                        <th>Receipent's Account No</th>
                        <th>Transaction Amount</th>
                        <th>Message</th>
                        <!-- <th>Status</th> -->
                    </tr>
                </thead>
                <tbody>

                    <?php 
                        if($result->num_rows){
                            // print_r($result);
                            while($row = $result->fetch_assoc()){
                                echo "<tr>" ;
                                echo "<td>", $row['tid'] , "</td>";
                                echo "<td>", $row['tdate'] , "</td>";
                                echo "<td>", $row['senderName'] , "</td>";
                                echo "<td>", $row['recipientName'] , "</td>";
                                echo "<td>", $row['senderAccNumber'] , "</td>";
                                echo "<td>", $row['recipientAccNumber'] , "</td>";
                                echo "<td>", $row['transactionAmt'] , "</td>";
                                echo "<td>", $row['message'] , "</td>";
                                // echo '<td> <button class ="CustomerViewBtn" onlick="window.location=','CustomerProfile.php"','>view</button>';
                                // echo '<td> <a href="CustomerProfile.php?cid=',$row['cid'],'"> <button class ="CustomerViewBtn">view</button>', "</td>";
                                echo "</tr>";
                            }
                        }
                    ?>
                   
                </tbody>
                
            </table>
        </div>

       
            
            <script src="js/scrip.js"></script>
</body>
</html>