<html>
<head>
        <title>Cars R Us</title>
    </head>
    <body style="background-color:aqua;">
        <?php
            $conn = mysqli_connect("localhost", "root", "");
            mysqli_select_db($conn, "cars r us");
            $sel = 'select * from credentials';
            $sq = mysqli_query($conn, $sel);
            $login_status = 0;
            while ($row = mysqli_fetch_array($sq)) {
                $login_status = 1;
                if($_POST["user"] == $row["username"]) {
                    if($_POST["pass"] == $row["password"]) {
                        $login_status = 1;
                        header('Location: ../cars.html');
                    }   
                    else 
                        header('Location: ../signin.html');
                }
            }
            if($login_status==0)
                header('Location: ../signin.html');
        ?>

        
    </body>
</html>