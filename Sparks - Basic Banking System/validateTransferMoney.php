<?php
    require_once("db.php");
    $senderName = $_POST['sendersName'];
    $senderAccountNo = $_POST['senderAccountNo'];
    $recipientsName = $_POST['recipientsName'];
    $recipientAccountNo = $_POST['recipientAccountNo'];
    $transferableAmount = $_POST['amount'];
    $message = $_POST['message'];

    $responseMessage = "";
    if($senderName == $recipientsName && $senderAccountNo == $recipientAccountNo){
        $responseMessage =  "can't send to same account";
        header("location: TransferMoney.php?res=$responseMessage");
        die;
    }
    // echo $senderName;
    // echo $recipientAccountNo;
    // echo $recipientsName;
    // echo $senderAccountNo;
    $sql1 = "select * from customers where cname='$senderName' and acc_number='$senderAccountNo'";
    $sql2 = "select * from customers where cname='$recipientsName' and acc_number='$recipientAccountNo'";
    // $sql = "select * from customers";
    $result = $conn->query($sql1);
    if($result->num_rows){
        // echo "true";
        // print_r($result->num_rows);
        $sender = $result->fetch_assoc();
        // echo "<br>";
        // echo "<br>";
        // echo "<br>";
        // print_r($sender);
    }else{
        $responseMessage =  "Sender do not found";
        header("location: TransferMoney.php?res=$responseMessage");
        die;
    }
    $result = $conn->query($sql2);
    if($result->num_rows){
        // echo "<br>";
        // print_r($result);
        $receiver = $result->fetch_assoc();
        // echo "<br>";
        // echo "<br>";
        // echo "<br>";
        // print_r($receiver);
    }else{
        $responseMessage =  "Receiver do not found";
        header("location: TransferMoney.php?res=$responseMessage");
        die;
    }


    

    


    // $result = $conn->query($sql);

    $senderBalance = $sender['current_balance'];
    $recipientBalance = $receiver['current_balance'];
    $cid = $receiver['cid'];

    if($senderBalance>$transferableAmount){
        $senderBalance -= $transferableAmount;
        $recipientBalance += $transferableAmount;
        // echo $senderBalance;
        // echo $recipientBalance;
        $sql1 = "UPDATE Customers
        SET current_balance = $senderBalance
        where cname='$senderName' and acc_number='$senderAccountNo'";     

        $sql2 = "UPDATE Customers
        SET current_balance = $recipientBalance
        where cname='$recipientsName' and acc_number='$recipientAccountNo'";       
        $sql3 = "insert into transactiondetails(senderAccNumber, recipientAccNumber, senderName, recipientName, transactionAmt, message, cid) values ('$senderAccountNo', '$recipientAccountNo', '$senderName', '$recipientsName', $transferableAmount, '$message', '$cid');

        ";
        $conn->query($sql1);
        $conn->query($sql2);
        $conn->query($sql3);

        // if($result1->num_rows){
            $responseMessage =  "Money Transfered Success";
            header("location: TransferMoney.php?res=$responseMessage");
            die;
        // }

        
    }
    
?>
