<?php
// Boilerplate for exercice DAY 3 at university MIW 05
// Code is bad and poor... but just enough for skills students :-) 

// Redirect to script to send email
if (!empty($_POST['email'])) {

    // Sending invitation by email
    header('Location: send_email.php');
    exit;

}

// Display delivery status, (tips anti-refreshing) 
if (!empty($_GET['delivery']) and $_GET['delivery'] === "sent") {

    // Sending invitation by email
    // echo "OK c'est envoyé..";
    $body_class = "delivery_sent";
}



?><!DOCTYPE html>
<html lang="fr">

<head>

    <title></title>

    <style type="text/css">
        .delivery_sent {
            background-color: green;
        }
        body{
            background-image: url("img/component.png");
            background-repeat: no-repeat;
            width: 1422px;
        }
        .inscription{
            margin-top: 200px;
            margin-left: 200px;
        }
        .input_mail, .input_submit{
            border-radius: 1px;
            font-size: 20px;
        }
        .input_mail{
            padding: 20px;
            width: 300px;
            border:1px solid;
        }
        .input_submit{
            padding: 20px 70px 20px 20px;
            font-weight: bold;
            width: 200px;
            background-color: #C30078;
            color:white;
            border:0px;
            background-image : url("img/Vip.png");
            background-repeat: no-repeat;
            /*background-position: right;*/
            background-position-x: 90%;
            background-position-y: 50%;
            background-size: 40px;
        }
    </style>

</head>
<body class="<?= $body_class ?>">

<form class="inscription" action="send_email.php" method="post">
    <input class="input_mail" type="email" name="email" placeholder="Ton email de star..." required/>
    <input class="input_submit" type="submit" value="Inscrit-toi !"/>
</form>

</body>
</html>