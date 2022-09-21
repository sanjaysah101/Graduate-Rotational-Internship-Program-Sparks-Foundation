<?php
  require_once("db.php");
    $message = isset($_GET['res'])?$_GET['res']:"";
    $id = isset($_GET['id'])?$_GET['id']:"";
    // echo $id;
    // echo $message;
    if(!($message == "")){
        echo '<script>
            alert("',$message,'");
        </script>';
    }
    
    $sql = "select * from customers";
    if(!($id == "")){
        $sql = "select * from customers where cid = $id";
    }
    $result = $conn->query($sql);
    // print_r($result);
    if($result->num_rows){
        echo '<datalist id="senders-name-list">';
            while($row = $result->fetch_assoc()){
                
                echo '<option value="',$row['cname'],'">';
            }
        
        echo '</datalist>';
    }
    $result = $conn->query($sql);
    if($result->num_rows){
        echo '<datalist id="senders-accountNo-list">';
            while($row = $result->fetch_assoc()){
                echo '<option value="',$row['acc_number'],'">';
            }
        
        echo '</datalist>';
    }

    $sql = "select * from customers";
    $result = $conn->query($sql);
    if($result->num_rows){
        echo '<datalist id="recipient-name-list">';
            while($row = $result->fetch_assoc()){
                echo '<option value="',$row['cname'],'">';
            }
        
        echo '</datalist>';
    }
    $result = $conn->query($sql);
    if($result->num_rows){
        echo '<datalist id="recipient-accountNo-list">';
            while($row = $result->fetch_assoc()){
                echo '<option value="',$row['acc_number'],'">';
            }
        
        echo '</datalist>';
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer Money</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/customerProfile.css">
</head>

<body>
    <!-- <div class="container"> -->
    <?php include_once("nav2.php")?>

    <!-- Transfer form -->
    <section class="container">
        <form action="" method="post">

        </form>

    </section>

    <!-- Transfer Money Form Section Start -->
    <section id="contact" class="container">
        <div class="title">
            <h2>Transfer Money</h2>
        </div>
        <div class="TransferMoneyForm">
            <form action="validateTransferMoney.php" method="post">
                <div class="form-field">
                    <label for="sendersName">Sender's Name:</label>
                    <input list="senders-name-list" id="sendersName" name="sendersName" required />                    
                </div>
                <div class="form-field">
                    <label for="senderAccountNo">Sender's Account Number:</label>
                    <input list="senders-accountNo-list" id="senderAccountNo" name="senderAccountNo" required/>
                </div>
                <div class="form-field">
                    <label for="recipientsName">Recipient's Name:</label>
                    <input list="recipient-name-list" id="recipientsName" name="recipientsName" required/>
                    
                </div>
                <div class="form-field">
                    <label for="recipientAccountNo">Recipient's Account Number:</label>
                    <input list="recipient-accountNo-list" id="recipientAccountNo" name="recipientAccountNo" required/>
                    
                </div>
                <div class="form-field">
                    <label for="amount">Amount</label>
                    <input type="number" name="amount" id="amount" min="100" value="100" step="10" required>
                </div>
                <div class="form-field">
                    <label for="message">Message:</label>
                    <textarea name="message" id="message" rows="10" required></textarea>
                </div>
                <div class="btn-container">
                    <input type="submit" value="Submit" class="btn">
                </div>
            </form>
        </div>
    </section>



    <script src="js/scrip.js"></script>
</body>

</html>