<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../Content/Matrix-Brackets-logo-transparant.png" type="image/x-icon">
    <link rel="stylesheet" href="../navbar/navbar.css">
    <link rel="stylesheet" href="contact.css">
    <title>Matrix | About</title>
</head>

<body>
    <?php include '../navbar/navbar.php'; ?>
    <div class="page1ContainerBackground">
        <canvas></canvas>
        <div class="page1ContainerTitel">
            <h1>Contact</h1>
        </div>
    </div>
    <div class="titelBar">
        <p>E-Mail</p>
    </div>
    <div class="page2container">
        <div class="page2containerMail">
            <form method="post" action="mail.php">
                <label for="name"></label>
                <input type="text" placeholder="Name" name="name" />
                <label for="email"></label>
                <input type="text" placeholder="Email Address" name="emailAddress" />
                <label for="subject"></label>
                <input type="text" placeholder="Subject" name="subject" />
                <label for="message"></label>
                <textarea placeholder="Message" name="message"></textarea>
                <label for="submit"></label>
                <button class="submit-button" name="submit" type="submit">Submit</button>
            </form>
        </div>
</body>
<script src="../navbar/navMenu.js"></script>
<script src="contact.js"></script>


</html>