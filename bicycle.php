<?php
$connect = mysqli_connect('localhost','root','','bicycleweb');

if (isset($_POST['btnsend']))
{
    $name = $_POST['txtname'];
    $email = $_POST['txtemail'];
    $phone = $_POST['txtphone'];
    $message = $_POST['txtmsg'];

    $insertcallback = " INSERT into user (name,email,phone,message) values ('$name','$email','$phone','$message')";
    $runcallback = mysqli_query($connect,$insertcallback);

    if ($runcallback) 
    {
        echo "<script>alert('Your message send successfully!')</script>";
        echo "<script>Location='bicycle.html'</script>";
    }
    else
    {
        $error = mysqli_error($connect);
        echo '<script>alert("Something went wrong! '.$error.' ")</script>';
        echo "<script>Location='bicycle.html'</script>";
    }
}
?>