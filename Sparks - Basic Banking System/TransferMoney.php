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
    <nav class="customerNav">
        <div class="container navbar">
            <div id="logo">
                <img src="img/logo.png" alt="Grip - Basic Banking System">
                <!-- logo -->
            </div>
            <div class="navbarlist">
                <a href="index.html">Home</a>
                <a href="./#about">About Us</a>
                <a href="./#contact">Contact Us</a>
            </div>

            <div class="hamburger">
                <i class="fa-solid fa-bars" id="hamburgerIcon"></i>
            </div>
        </div>
    </nav>
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
            <form action="">
                <div class="form-field">
                    <label for="sendersName">Sender's Name:</label>
                    <input list="senders-name-list" id="sendersName" name="sendersName" required />
                    <datalist id="senders-name-list">
                        <option value="Sanjay">
                        <option value="Ramesh">
                        <option value="Mint">
                        <option value="Pinku">
                        <option value="Vanilla">
                    </datalist>
                </div>
                <div class="form-field">
                    <label for="senderAccountNo">Sender's Account Number:</label>
                    <input list="senders-accountNo-list" id="senderAccountNo" name="senderAccountNo" required/>
                    <datalist id="senders-accountNo-list">
                        <option value="sanjay879742152187524800">
                        <option value="Ramesh87524800">
                        <option value="Mint87524800">
                        <option value="Pinku87524800">
                        <option value="Vanill87524800">
                    </datalist>
                </div>
                <div class="form-field">
                    <label for="recipientsName">Recipient's Name:</label>
                    <input list="recipient-name-list" id="recipientsName" name="recipientsName" required/>
                    <datalist id="recipient-name-list">
                        <option value="Sanjay">
                        <option value="Ramesh">
                        <option value="Mint">
                        <option value="Pinku">
                        <option value="Vanilla">
                    </datalist>
                </div>
                <div class="form-field">
                    <label for="recipientAccountNo">Recipient's Account Number:</label>
                    <input list="recipient-accountNo-list" id="recipientAccountNo" name="recipientAccountNo" required/>
                    <datalist id="recipient-accountNo-list">
                        <option value="sanjay879742152187524800">
                        <option value="Ramesh87524800">
                        <option value="Mint87524800">
                        <option value="Pinku87524800">
                        <option value="Vanill87524800">
                    </datalist>
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