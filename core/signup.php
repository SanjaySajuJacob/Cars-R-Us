<html>
<head>
        <title>Cars R Us</title>
    </head>
    <body style="background-color:aqua;">
        <?php
            $conn = mysqli_connect("localhost", "root", "");
            mysqli_select_db($conn, "cars r us");
            $user = $_POST["user"];
            $pass = $_POST["pass"];
            $repass = $_POST["repass"]; 
            if (($user == "") || ($pass == ""))
                header('Location: ../signup.html');
            else if ($repass != $pass)
                header('Location: ../signup.html'); 
            else {
                $sel = "select * from credentials where username = '$user'";
                $sq = mysqli_query($conn, $sel);
                $signup_status = 0;
                while($row = mysqli_fetch_array($sq)) {    
                    $signup_status = 1; 
                    header('Location: ../signup.html');
                }
                if($signup_status==0) {
                    $sel1 = "insert into credentials values ('$user', '$pass')";
                    $sql = mysqli_query($conn, $sel1);
                    header('Location: ../signin.html');
                }
            }
        ?>

        
    </body>
</html>