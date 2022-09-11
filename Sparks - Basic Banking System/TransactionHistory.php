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
        <nav class="customerNav">
            <div class="container navbar">
                <div id="logo">
                    <img src="img/logo.png" alt="Grip - Basic Banking System">
                    <!-- logo -->
                </div>
                <div class="navbarlist">
                    <a href="index.html">Home</a>
                    <a href="#about">About Us</a>
                    <a href="#contact">Contact Us</a>
                </div>
                
                <div class="hamburger">
                    <i class="fa-solid fa-bars" id="hamburgerIcon"></i>
                </div>
            </div>
        </nav>

        <!-- Customer Table -->

        <div class="tableContainer container ">
            <table border="1px" class="customerTable ">
                <thead>
                    <tr>
                        <th>S. No.</th>
                        <th>Transaction Id</th>
                        <th>Date</th>
                        <th>Sender's Name</th>
                        <th>Receipent Name</th>
                        <th>Sender's Account No</th>
                        <th>Receipent's Account No</th>
                        <th>Transaction Amount</th>
                        <th>Message</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>tran20021802sba</td>
                        <td>11-09-2022</td>
                        <td>Sanjay Kumar Sah</td>
                        <td>Rahul Kumar Sah</td>
                        <td>UBIN2116589</td>
                        <td>UBIN2116590</td>
                        <td>100</td>
                        <td>gift</td>
                        <td>success</td>
                    </tr>
                   
                </tbody>
                
            </table>
        </div>

       
            
            <script src="js/scrip.js"></script>
</body>
</html>