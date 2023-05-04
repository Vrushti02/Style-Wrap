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

    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "INSERT INTO sw (`username`,`password`) VALUES ('$username','$password')";

    $data = mysqli_query($conn, $query);
    if($data)
    {
        
        header('Location:index.html',true);
        
    }
    else{
        echo"Failed";
        echo"<sciprt> 
        window.location.href = 'account.html';
        </script>
        ";
    }
?>