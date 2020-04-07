<?php

session_start();

$con=mysqli_connect("mysql.hostinger.in","u669526942_users","Subhadip1","u669526942_users");

$first = $_POST['first'];
$last = $_POST['last'];
$uid = $_POST['uid'];
$pwd = $_POST['pwd'];
$check="SELECT * FROM users WHERE uid = '$_POST[uid]'";
$rs = mysqli_query($con,$check);
if(mysqli_num_rows($rs) >0)
{
    echo "User Already in Exists.";
}

else
{
    $newUser="INSERT INTO users (first, last, uid, pwd) 
VALUES ('$first','$last','$uid','$pwd')";
    if (mysqli_query($con,$newUser))
    {
        echo "You are now registered";
    }
    else
    {
        echo "Error adding user in database";
    }
}

?>

