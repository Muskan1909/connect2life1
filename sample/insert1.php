<html>
<body>
<?php
$conn = new mysqli('localhost','root','1234');
if ($conn->connect_error) 
{
echo("Connection failed:");
}
else
{
echo "DB Connected successfully";
}
mysqli_select_db($conn,"sample_db");
echo "\n DB is seleted as Test  successfully";
$sql="INSERT INTO sample_table (fname,age) VALUES (?,?)";
$fname=$_POST['fname'];
$age=$_POST['age'];
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
mysqli_close($conn);
?>
</body>
</html>