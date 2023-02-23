<?php
$name = $_POST['name'];
$phno = $_POST['phno'];
$addr = $_POST['addr'];
$gender = $_POST['gender'];
//database connection
$servername = "localhost";
$username = "username";
$password = "password";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
<!-- $conn = new mysqli('localhost','root','','petreg');
if($conn->connect_error)
{
    die('Connection failed :' .$conn->connect_error);

}else{
    $stmt=$conn->prepare("insert into registration(name,phno,addr,gender)values(?, ?, ?, ?)");
    $stmt->bind_param("ssss",$name,$phno,$addr,$gender);
    $stmt->execute();
    echo "Welcome ! Registration Successful";
    $stmt->close();
    $conn->close();

}
?> -->
