<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customers</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <!-- <div class="container"> -->
        <header>
        <?php include_once("nav.php")?>
            <div class="hero">
                <div class="content">
                    <h2>Welcome to </h2>
                    <h1>Spark - Customers Page</h1>
                    <h2>Here are the details of all available customers</h2>
                </div>
            </div>
        </header>

        <!-- Customer Table -->


        <?php
            require_once("db.php");
            $sql = "select * from customers";
            $result = $conn->query($sql);
            
        ?>


        <div class="tableContainer container ">
            <table class="customerTable">
                <thead>
                    <tr>
                        <th>S. No.</th>
                        <th>Customer Name</th>
                        <th>Account Number</th>
                        <th>Account Type</th>
                        <th>Citizenship</th>
                        <th>Email ID</th>
                        <th>Current Balance</th>
                        <th>View Profile</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        if($result->num_rows){
                            // print_r($result);
                            while($row = $result->fetch_assoc()){
                                echo "<tr>" ;
                                echo "<td>", $row['cid'] , "</td>";
                                echo "<td>", $row['cname'] , "</td>";
                                echo "<td>", $row['acc_number'] , "</td>";
                                echo "<td>", $row['acc_type'] , "</td>";
                                echo "<td>", $row['nationality'] , "</td>";
                                echo "<td>", $row['email_id'] , "</td>";
                                echo "<td>", $row['current_balance'] , "</td>";
                                echo '<td> <button class ="CustomerViewBtn">view</button>';
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