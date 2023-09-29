<?php
    $db_hostname="127.0.0.1";
    $db_username="root";
    $db_password="";
    $db_name="tour";

    $conn=mysqli_connect($db_hostname,$db_username,$db_password,$db_name);
    if(!$conn)
    {
        echo"Connection Failed:",mysqli_connect_error();
        exit;
    }

    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];

    $sql="Insert into contact(Name,Email,Phone,Subject,Message) values ('$name','$email','$phone','$subject','$message')";
    $result=mysqli_query($conn,$sql);
    if(!$result)
    {
        echo "error: ",mysqli_error($conn);
        exit;
    }
    echo "<strong>We will contact you soon..</strong>";
    mysqli_close($conn);
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <h3> <i class="bi bi-emoji-sunglasses"></i> Thanks!!</h3>
</body>
</html>
