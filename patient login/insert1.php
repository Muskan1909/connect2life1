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
mysqli_select_db($conn,"patient_signup");
echo "\n DB is seleted as Test  successfully";
$sql="INSERT INTO patient_record (name,address1,address2,district,state,pswd,pswconfirm,Aadhar no.) VALUES ('$_POST[name]','$_POST[address1]','$_POST[address2]','$_POST[district]','$_POST[state]','$_POST[pswd]','$_Post[pswconfirm]','$_Post[Aadhar no.]')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
mysqli_close($conn);
?>
</body>
</html>