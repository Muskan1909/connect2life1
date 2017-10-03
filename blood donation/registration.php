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
mysqli_select_db($conn,"blood");
echo "\n DB is seleted as Test  successfully";
$sql="INSERT INTO registration (firstname,lastname,address1,address2,bloodgrp) VALUES ('.$_POST[firstname].','.$_POST[lastname].','.$_POST[address1].','.$_POST[address2].','.$_POST[bloodgrp].')";
if(isset($_POST['Register'])){
$address1 = $_POST['address1'];
$address2 = $_POST['address2'];
$bloodgrp = $_POST['bloodgrp'];
}
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
mysqli_close($conn);
?>
</body>
</html>