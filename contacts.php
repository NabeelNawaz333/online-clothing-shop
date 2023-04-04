<?php
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'contacts');
$Fname=$_POST['firstname'];
$Lname=$_POST['lastname'];
$email=$_POST['email'];
$sub=$_POST['subject'];
if($con)
{
    $reg="insert into contacts (firstname,lastname,email,subject) values ('$Fname','$Lname','$email','$sub')";
    mysqli_query($con,$reg);
    echo '<script>alert("Details add Successfully")</script>';
				echo '<script>window.location="index.html"</script>';
}
else{
    echo '<script>alert("Connection Error!")</script>';
}

?>