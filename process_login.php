<?php
if(isset($_POST['login'])){
    $errors();
    if(empty($_POST['username'])||empty($_POST['phone'])){
        $errors="username is empty or phone is empty";
    }
    else{
        $username=$_POST['username'];
        $phone=$_POST['phone'];
        $conn=mysqli_connect("localhost","root","","secure");
        if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql=mysqli_query($conn,"select * from alarm where username=".$username." && phone=".$phone);
if($sql){
    echo "success";
}
    }
}


?>