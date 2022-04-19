<?php
    // if(isset($_POST['submit'])){
    //     $user = $_POST['user'];
    //     $pass = $_POST['pass'];
    //     $con = mysqli_connect("localhost","root","");
    //     mysqli_select_db($con,"20BAI1139");
    //     $sel="select * from login where username = '".$user."' and password = '".$pass."';";
    //     $sq=mysqli_query($con,$sel);
    //     $count = 0;
    //     while ($row=mysqli_fetch_array($sq))
    //     {
    //         $count++;
    //     }
    //     if($count == 0){
    //         echo "Your credentials are invalid";
    //     }
    //     else{
    //         header('Location: index.html');
    //     }
    // }
    $user = $_POST['username'];
    $pass = $_POST['password'];
    echo '1';
    if($user == "abcd"){
        header('Location: ../templates/main.html');
    }
?>