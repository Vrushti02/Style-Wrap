<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "style_wrap";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection filed: " . $conn->connect_error);
}
echo "Connected successfully";
?>

<?php

    $Name = $_POST['Name'];
    $Email = $_POST['Email'];
    $Message = $_POST['Message'];


    $query = "INSERT INTO `fb=` (`Name`,`Email`,`Message`) VALUES ('$Name','$Email','$Message')";

    $data = mysqli_query($conn, $query);
    if($data)
    {
        
        header('Location:contact.html',true);
        
    }
    else{
        echo"Failed";
        echo"<script> 
        window.location.href = 'contact.html';
        </script>
        ";
    }
?>