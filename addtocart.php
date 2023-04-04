<?php
session_start();


$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'address');
$Fname=$_POST['Fname'];
$email=$_POST['email'];
$contactnumber=$_POST['contactnumber'];
$city=$_POST['city'];
$Address=$_POST['Address'];
if($con)
{
    $reg="insert into details (Fname,email,contactnumber,city,Address) values ('$Fname','$email','$contactnumber','$city','$Address')";
    mysqli_query($con,$reg);
    echo '<script>alert("Details add Successfully")</script>';
				echo '<script>window.location="welcome.html"</script>';
}
else{
    echo '<script>alert("Connection Error!")</script>';
}

?>