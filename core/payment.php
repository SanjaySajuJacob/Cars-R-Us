<html>
<head>
        <title>Cars R Us</title>
    </head>
    <body style="background-color:aqua;">
        <?php
            $name = $_POST['name'];
            $cno = $_POST['cno'];
            $amount = $_POST['amt'];
            $cvv = $_POST['cvv'];
            if (($name == "") || ($cno == "") || ($amount == "") || ($cvv == ""))
                header('Location: ../payment.html');
            else {
                $conn = mysqli_connect("localhost", "root", "");
                mysqli_select_db($conn, "cars r us");
                $sel = "insert into transaction values ('$name', '$cno', '$amount')";
                $sq = mysqli_query($conn, $sel);
                echo "<center><img src = '../assets/images/pay.webp'></center><h1 align='center' style='font-family:calibri;'>Payment successful... <a href = '../cars.html'>Continue</a> to find more</h1>";
            }  
        ?>
    </body>
</html>